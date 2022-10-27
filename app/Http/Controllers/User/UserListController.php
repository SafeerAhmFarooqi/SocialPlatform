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

class UserListController extends BaseUserController
{
 public function userListPageShow(Request $request)
 {
    $users=User::when($request->search, function($query,$search) {
        return $query->where('firstname', 'like', '%'.$search.'%')
                     ->orWhere('lastname', 'like', '%'.$search.'%');
    })
    ->where('id','!=',Auth::user()->id)
    ->where('user_status',true)
    ->get();
    return view('dashboards.user.user-list-page',[
        'users'=>$users,
    ]);
 }  

 public function userInfoPageShow($id=null)
 {
    //return "safeer : ".$id;
    $user=User::findOrFail($id);
    return view('dashboards.user.user-information-page',[
        'user'=>$user,
    ]);
 }  
}









