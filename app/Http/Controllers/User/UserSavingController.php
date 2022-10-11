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

class UserSavingController extends BaseUserController
{
 public function userSavingPageShow()
 {
   $saving=0;
   $usedVouchers=UseVoucher::where('user_id',Auth::user()->id)->get();
   foreach ($usedVouchers as $usedVoucher) {
    $saving+=$usedVoucher->voucher->discount;
   }
    return view('dashboards.user.user-saving-page',[
        'saving'=>$saving,
        'usedVouchers'=>$usedVouchers,
    ]);
 }   
}









