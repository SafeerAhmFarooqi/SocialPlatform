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

class UserProfileController extends BaseUserController
{
 public function userProfilePageShow()
 {
    return view('dashboards.user.settings-basic-information-page');
 }

 public function userProfileImageStore(Request $request)
 {
    $request->validate([
        //Validation Rules  
        'profile_pic' => ['required','max:2048','image','mimes:jpeg,png,jpg,gif,svg,bmp'],
    ],[
        //Validation Messages
        'required'=>':attribute Required',
    ],[
        //Validation Attributes
        'profile_pic' =>'Profile Image',
    ]);

    $request->profile_pic->store('profile-images/'.Auth::user()->id.'/profile-pic','public');
    $imagePath = 'profile-images/'.Auth::user()->id.'/profile-pic'.'/'. $request->profile_pic->hashName();
    $user=Auth::user();    
    $user->profile_pic_path=$imagePath;
    $user->save();

        return back()->with('success', 'Profile Image Updated');
 }

 
   
}









