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

class UserProfileController extends BaseUserController
{
 public function userProfilePageShow()
 {
    return view('dashboards.user.profile-basic-information-page',[
        'activeLink'=>1,
        'countries'=>Countries::where('status',true)->get(),
    ]);
 }

 public function userProfilePasswordPageShow()
 {
    return view('dashboards.user.profile-password-page',[
        'activeLink'=>5,
    ]);
 }

 public function userProfilePasswordChange(Request $request)
 {
    if(Auth::check())
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('password.request',$page='password-change');
    }
    return back();
 }

 public function userProfileSettingPageShow()
 {
   //return "safeer";
    return view('dashboards.user.profile-account-setting-page',[
        'activeLink'=>4,
    ]);
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

    if(Auth::user()->profile_pic_path)
    {
        Storage::delete('public/'.Auth::user()->profile_pic_path);
        Auth::user()->update([
            'profile_pic_path' => null,
        ]);
    }

    $request->profile_pic->store('profile-images/'.Auth::user()->id.'/profile-pic','public');
    $imagePath = 'profile-images/'.Auth::user()->id.'/profile-pic'.'/'. $request->profile_pic->hashName();
    $user=Auth::user();    
    $user->profile_pic_path=$imagePath;
    $user->save();

        return back()->with('success_1', 'Profile Image Updated');
 }

 public function userCoverImageStore(Request $request)
 {
    $request->validate([
        //Validation Rules  
        'cover_pic' => ['required','max:2048','image','mimes:jpeg,png,jpg,gif,svg,bmp'],
    ],[
        //Validation Messages
        'required'=>':attribute Required',
    ],[
        //Validation Attributes
        'cover_pic' =>'Cover Image',
    ]);

    if(Auth::user()->cover_image_path)
    {
        Storage::delete('public/'.Auth::user()->cover_image_path);
        Auth::user()->update([
            'cover_image_path' => null,
        ]);
    }

    $request->cover_pic->store('cover-images/'.Auth::user()->id.'/cover-pic','public');
    $imagePath = 'cover-images/'.Auth::user()->id.'/cover-pic'.'/'. $request->cover_pic->hashName();
    $user=Auth::user();    
    $user->cover_image_path=$imagePath;
    $user->save();

        return back()->with('success_1', 'Cover Image Updated');
 }

 public function userProfileSettingStore(Request $request)
 {
    //return "safeer";
    //return $request;
    $accountSetting=Auth::user()->accountSetting??collect();
    if ($accountSetting->count()>0) {
        $accountSetting->user_dob=in_array('dob',$request->setting??[])?true : false;
        $accountSetting->user_address=in_array('address',$request->setting??[])?true : false;
        $accountSetting->user_phone=in_array('phone',$request->setting??[])?true : false;
        $accountSetting->user_about=in_array('about',$request->setting??[])?true : false;
        $accountSetting->profile_image=in_array('profileimage',$request->setting??[])?true : false;
        $accountSetting->cover_image=in_array('coverimage',$request->setting??[])?true : false;
        $accountSetting->save();
        return back()->with('success', 'Profile Settings Updated');
    } else {
        $accountSetting = AccountSetting::create([
            'user_dob' => in_array('dob',$request->setting??[])?true : false,
            'user_address' => in_array('address',$request->setting??[])?true : false,
            'user_phone' => in_array('phone',$request->setting??[])?true : false,
            'user_about' => in_array('about',$request->setting??[])?true : false,
            'profile_image' => in_array('profileimage',$request->setting??[])?true : false,
            'cover_image' => in_array('coverimage',$request->setting??[])?true : false,
        ]);
        if ($accountSetting) {
            return back()->with('success', 'Profile Settings Updated');
        } else {
            return back()->with('error', 'Profile Settings Not Updated');
        }
    }
    
 }

 public function userProfileDataStore(Request $request)
 {
    //return "safeer";
    //return Auth::user()->dob->format('d');
    $request->validate([
        //Validation Rules  
        'firstname' => ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
        'dob' => ['required', 'date', 'before:'.Carbon::now()->subYears(12)],
        'address' => ['required', 'string', 'max:255'],
        'city' => ['required', 'string', 'max:255'],
        'country' => ['required', 'string', 'max:255'],
        'about_me' => ['max:10000'],
    ],[
        //Validation Messages
        'required'=>':attribute Required',
    ],[
        //Validation Attributes
        'firstname' =>'First Name',
        'lastname' =>'Last Name',
        'dob' =>'Date of Birth',
        'address' =>'Address',
        'city' =>'City',
        'country' =>'Country',
    ]);

    $user=Auth::user();    
    $user->firstname=$request->firstname;
    $user->lastname=$request->lastname;
    $user->dob=$request->dob;
    $user->user_address=$request->address;
    $user->city_id=$request->city;
    $user->phone=$request->phone;
    $user->country_id=$request->country;
    $user->about_me=$request->about_me;
    $user->save();

        return back()->with('success_2', 'Profile Updated');
 }

 public function supportPage()
 {
    return view('dashboards.user.support-page');
 }
   
}









