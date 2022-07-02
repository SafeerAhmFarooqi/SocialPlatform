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

   public function dashboard()
   {
    if (Auth::check()&&(Auth::user()->hasRole('Shop')||Auth::user()->hasRole('Admin'))) {
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
    } else {
      return view('dashboards.user.dashboard');
    }
    
     
   }

   public function landingPage()
   {
    return view('dashboards.shop-admin.dashboard');
   }
}


