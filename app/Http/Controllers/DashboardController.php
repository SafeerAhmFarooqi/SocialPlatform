<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class DashboardController extends BaseController
{

   public function dashboard()
   {
      $allUsersCount= User::role('User')->count();
      $allActiveUsersCount= User::role('User')->where('user_status',true)->count();
      $allDeactiveUsersCount= User::role('User')->where('user_status',false)->count();
    return view('dashboards.shop-admin.dashboard',[
      'allUsersCount'=>$allUsersCount,
      'allActiveUsersCount'=>$allActiveUsersCount,
      'allDeactiveUsersCount'=>$allDeactiveUsersCount,
    ]);
   }

   public function landingPage()
   {
    return view('dashboards.shop-admin.dashboard');
   }
}


