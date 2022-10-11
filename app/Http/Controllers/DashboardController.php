<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Voucher;
use App\Models\UseVoucher;
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
      $allActiveVouchersCount= Voucher::where('voucher_status',true)->count();
      $allDeactiveVouchersCount= Voucher::where('voucher_status',false)->count();
      $shopMyVouchersCount= Voucher::where('shop_id',Auth::user()->id)->count();
      $shopMyUseVouchers= UseVoucher::where('shop_id',Auth::user()->id)->get();
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


