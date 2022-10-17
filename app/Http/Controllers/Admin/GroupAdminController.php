<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\GroupMemberRequest;
use App\Models\Group;

class GroupAdminController extends BaseAdminController
{
 public function allGroupsList()
 {
    // return "safeer";
    $groups = Group::all();
    return view('dashboards.shop-admin.admin.all-groups-page',['groups'=>$groups,'srNo'=>0]);
 }    

 public function allGroupsListShowActive()
 {
    // return "safeer";
    $groups = Group::where('status',true)->get();
    return view('dashboards.shop-admin.admin.all-groups-active-page',['groups'=>$groups,'srNo'=>0]);
 }   

 public function allGroupsListShowDeactive()
 {
    // return "safeer";
    $groups = Group::where('status',false)->get();
    return view('dashboards.shop-admin.admin.all-groups-deactive-page',['groups'=>$groups,'srNo'=>0]);
 }   

 public function allGroupsListDelete(Request $request)
 {
    $group=Group::find($request->group_id);
    foreach (GroupMemberRequest::where('group_id',$request->group_id)->where('status',null)->get() as $groupMemberRequest) {
      $groupMemberRequest->update([
         'status' => false,
      ]);
    }

    $group->update([
      'status' => false,
    ]);

    $group->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Group Deleted Successfully');
 }    

 public function allGroupsListActive(Request $request)
 {
    $group=Group::find($request->group_id);
    $group->status=true;
    $group->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Group Activated Successfully');
 } 

 public function allGroupsListDeactive(Request $request)
 {
    $group=Group::find($request->group_id);
    $group->status=false;
    $group->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Group Deactivated Successfully');
 } 
   
}









