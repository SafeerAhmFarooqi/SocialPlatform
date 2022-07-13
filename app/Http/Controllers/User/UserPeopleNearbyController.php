<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Group;
use App\Models\Voucher;
use App\Models\UseVoucher;
use App\Models\Countries;
use Illuminate\Support\Carbon;

class UserPeopleNearbyController extends BaseUserController
{
 public function userPeopleNearbyPageShow()
 {
    return view('dashboards.user.people-nearby-page');
 }
  
}









