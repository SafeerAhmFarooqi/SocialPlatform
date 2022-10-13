<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Voucher;
use App\Models\Posts;
use App\Models\GroupPost;
use App\Models\UseVoucher;
use App\Models\ShopCategories;
use App\Models\Comments;
use App\Models\GroupComment;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class DashboardController extends BaseController
{

   public function dashboard(Request $request)
   {
    if ((Auth::user()->hasRole('Shop')&&!Auth::user()->hasRole('User')&&Auth::user()->shop_status==true)||(Auth::user()->hasRole('Shop')&&Auth::user()->hasRole('User')&&Auth::user()->user_status==false&&Auth::user()->shop_status==true)||(Auth::user()->hasRole('Admin'))) {
      $allUsersCount= User::role('User')->count();
      $allActiveUsersCount= User::role('User')->where('user_status',true)->count();
      $allDeactiveUsersCount= User::role('User')->where('user_status',false)->count();
      $allShopsCount= User::role('Shop')->count();
      $allActiveShopsCount= User::role('Shop')->where('shop_status',true)->count();
      $allDeactiveShopsCount= User::role('Shop')->where('shop_status',false)->count();
      $allGroupsCount= Group::count();
      $allActiveGroupsCount= Group::where('group_status',true)->count();
      $allDeactiveGroupsCount= Group::where('group_status',false)->count();
      $allVouchersCount= Voucher::count();
      $allUsedVouchersCount= UseVoucher::count();
      $allActiveVouchersCount= Voucher::all()->count();
      $allDeactiveVouchersCount= 0;
      $shopMyVouchersCount= Voucher::where('shop_id',Auth::user()->id)->count();
      $shopMyUseVouchers= UseVoucher::whereRelation('voucher', 'shop_id', Auth::user()->id)->get();
      $allPostsCount=Posts::all()->count()+GroupPost::all()->count();
      $allUsersPostsCount=Posts::all()->count();
      $allGroupPostsCount=GroupPost::all()->count();
      $allCommentsCount=Comments::all()->count()+GroupComment::all()->count();
      $allUsersCommentsCount=Comments::all()->count();
      $allGroupCommentsCount=GroupComment::all()->count();
      $allShopsCategoriesCount=ShopCategories::all()->count();
      $shopMyUseVoucherSpend=0;
      foreach ($shopMyUseVouchers as $shopMyUseVoucher) {
        $shopMyUseVoucherSpend+=$shopMyUseVoucher->discount;
      }
    return view('dashboards.shop-admin.dashboard',[
      'allUsersCount'=>$allUsersCount,
      'allActiveUsersCount'=>$allActiveUsersCount,
      'allDeactiveUsersCount'=>$allDeactiveUsersCount,
      'allShopsCount'=>$allShopsCount,
      'allActiveShopsCount'=>$allActiveShopsCount,
      'allDeactiveShopsCount'=>$allDeactiveShopsCount,
      'allGroupsCount'=>$allGroupsCount,
      'allActiveGroupsCount'=>$allActiveGroupsCount,
      'allDeactiveGroupsCount'=>$allDeactiveGroupsCount,
      'allVouchersCount'=>$allVouchersCount,
      'allActiveVouchersCount'=>$allActiveVouchersCount,
      'allDeactiveVouchersCount'=>$allDeactiveVouchersCount,
      'shopMyVouchersCount'=>$shopMyVouchersCount,
      'shopMyUseVouchersCount'=>$shopMyUseVouchers->count(),
      'shopMyUseVoucherSpend'=>$shopMyUseVoucherSpend,
      'allUsedVouchersCount' => $allUsedVouchersCount,
      'allPostsCount' => $allPostsCount,
      'allCommentsCount' => $allCommentsCount,
      'allUsersPostsCount' => $allUsersPostsCount,
      'allGroupPostsCount' => $allGroupPostsCount,
      'allUsersCommentsCount' => $allUsersCommentsCount,
      'allGroupCommentsCount' => $allGroupCommentsCount,
      'allShopsCategoriesCount' => $allShopsCategoriesCount,
    ]);
    } 
    if(Auth::user()->hasRole('User')&&Auth::user()->user_status==true){
      return view('dashboards.user.dashboard');
    }
    
    if((Auth::user()->hasRole('Shop')&&!Auth::user()->hasRole('User')&&Auth::user()->user_status==true)){
      Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    if((Auth::user()->hasRole('User')&&!Auth::user()->hasRole('Shop')&&Auth::user()->shop_status==true)){
      Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    return redirect()->route('admin.dashboard.approval.notice');
     
   }

   public function landingPage()
   {
    return view('dashboards.shop-admin.dashboard');
   }

   public function agb()
   {
    return view('dashboards.app.agb');
   }

   public function getName(Request $request)
   {
    $user=User::find($request->get('id'));

    return $user->firstname.' '.$user->lastname;
   }
}


