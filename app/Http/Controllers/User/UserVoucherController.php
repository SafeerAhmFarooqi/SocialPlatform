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
use App\Models\AccountSetting;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class UserVoucherController extends BaseUserController
{
 public function userVoucherPageShow()
 {
    //return "voucher";
    return view('dashboards.user.user-voucher-page',[

    ]);
 }  
}









