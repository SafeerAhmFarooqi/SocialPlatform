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
use Illuminate\Support\Facades\Crypt;

class UserVoucherController extends BaseUserController
{
 public function userVoucherPageShow()
 {
    //return "voucher";
    return view('dashboards.user.user-voucher-page',[

    ]);
 }  

 public function  userVoucherUsePageShow($email,$code)
 {
  // return urldecode($email).' '.urldecode($code);
    //return "voucher";
    //return "safeer";
    $email = Crypt::decryptString(urldecode($email));
    $code = Crypt::decryptString(urldecode($code));
    $user = User::where('email',$email)->first();
    $voucher = Voucher::where('code',$code)->first();
    if ($user&&$user->email==Auth::user()->email&&$voucher) {
      if (UseVoucher::where('user_id',$user->id)->where('voucher_id',$voucher->id)->first()) {
         return "This voucher Has Already Been Used By You";
      } else {
         UseVoucher::create([
            'user_id' => $user->id,
            'voucher_id' => $voucher->id,
            'shop_id' => $voucher->shop->id,
          ]);
          
          return view('dashboards.user.user-voucher-use-page',[

         ]);
      }
    } else {
         return "Unauthorised action";
    }
    
    

 }  
}









