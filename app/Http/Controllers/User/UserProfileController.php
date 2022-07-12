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

class UserProfileController extends BaseUserController
{
 public function userProfilePageShow()
 {
    return view('dashboards.user.settings-basic-information-page',[
        'activeLink'=>1,
        'countries'=>Countries::all(),
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

    $request->profile_pic->store('profile-images/'.Auth::user()->id.'/profile-pic','public');
    $imagePath = 'profile-images/'.Auth::user()->id.'/profile-pic'.'/'. $request->profile_pic->hashName();
    $user=Auth::user();    
    $user->profile_pic_path=$imagePath;
    $user->save();

        return back()->with('success_1', 'Profile Image Updated');
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
    $user->city=$request->city;
    $user->country_id=$request->country;
    $user->about_me=$request->about_me;
    $user->save();

        return back()->with('success_2', 'Profile Updated');
 }

 
   
}









