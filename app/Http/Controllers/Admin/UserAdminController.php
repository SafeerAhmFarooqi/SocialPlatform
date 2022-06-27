<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserAdminController extends BaseAdminController
{
 public function allUsersList()
 {
    // return "safeer";
    $users = User::role('User')->get();
    return view('dashboards.shop-admin.admin.all-users-page',['users'=>$users,'srNo'=>0]);
 }    

 public function allUsersListShowActive()
 {
    // return "safeer";
    $users = User::role('User')->where('user_status',true)->get();
    return view('dashboards.shop-admin.admin.all-users-active-page',['users'=>$users,'srNo'=>0]);
 }   

 public function allUsersListShowDeactive()
 {
    // return "safeer";
    $users = User::role('User')->where('user_status',false)->get();
    return view('dashboards.shop-admin.admin.all-users-deactive-page',['users'=>$users,'srNo'=>0]);
 }   

 public function allUsersListDelete(Request $request)
 {
    User::find($request->user_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'User Deleted Successfully');
 }    

 public function allUsersListActive(Request $request)
 {
    $user=User::find($request->user_id);
    $user->user_status=true;
    $user->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'User Activated Successfully');
 } 

 public function allUsersListDeactive(Request $request)
 {
    $user=User::find($request->user_id);
    $user->user_status=false;
    $user->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'User Deactivated Successfully');
 } 

 public function showUserOrders(Request $request)
 {
     $user=User::find($request->user_id);
     $orders=$user->orders->where('payment_status',true);
     return view('admin-dashboard.users-order-page',[
        'user'=>$user,
        'orders'=>$orders,
        'srNo'=>0,
      ]);
 }   
}









