<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Group;
use App\Models\GroupMembers;
use App\Models\Voucher;
use App\Models\UseVoucher;
use App\Models\Countries;
use Illuminate\Support\Carbon;

class UserGroupsController extends BaseUserController
{
 public function userGroupsPageShow()
 {
    $users= User::where('id', '!=',Auth::user()->id)->get();
    return view('dashboards.user.people-groups-page',[
        'countries'=>Countries::all(),
        'myGroups'=>Group::where('owner_id',Auth::user()->id)->get(),
        'joinedGroups'=>Group::whereRelation('members', 'member_id', Auth::user()->id)->where('owner_id','!=',Auth::user()->id)->get(),
        'users'=> $users,
    ]);
 }

 public function userGroupsStore(Request $request)
 {

    $group = Group::create([
        'title' => $request->group_title,
        'location' => $request->location,
        'created_by' => Auth::user()->id,
        'owner_id' => Auth::user()->id,
    ]);

    $groupMember = GroupMembers::create([
        'group_id'=>$group->id,
        'member_id'=>$group->created_by,
    ]);

    return back();
 }

 public function userGroupsMemberStore(Request $request)
 {
    //return $request;
    foreach ($request->members as $value) {
        $check=false;
        $check=GroupMembers::where('group_id',$request->groupId)->where('member_id',$value)->first();
        if(!$check)
        {
            GroupMembers::create([
                'group_id'=>$request->groupId,
                'member_id'=>$value,
            ]);
        }
        
    }

    return back();
 }
 

 public function userGroupPostPageShow($id=null)
 {
    //return $id;
    if($id==null)
    {
        return back();
    }
  $result=(Group::findOrFail($id))->members->where('member_id',Auth::user()->id)->first();
  $result=is_null($result)? false : $result->status;
  if ($result) {
    //return "true";
    return view('dashboards.user.group-post-page',[
        'id'=>$id,
        'group'=>Group::findOrFail($id),
    ]);
  } else {
    return back();
  }
 }
 
  
}









