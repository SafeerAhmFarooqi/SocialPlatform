<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Group;
use App\Models\GroupMembers;
use App\Models\GroupBlockList;
use App\Models\Voucher;
use App\Models\UseVoucher;
use App\Models\Countries;
use App\Models\GroupMemberRequest;
use Illuminate\Support\Carbon;

class UserGroupsController extends BaseUserController
{
 public function userGroupsPageShow()
 {
    $users= User::where('id', '!=',Auth::user()->id)->role('User')->get();
    $myGroups=Group::where('owner_id',Auth::user()->id)->withTrashed()->get();
    $joinedGroups=Group::whereRelation('members', 'member_id', Auth::user()->id)->where('owner_id','!=',Auth::user()->id)->withTrashed()->get();
    $active=0;
    $active=$myGroups->count()>0&&$joinedGroups->count()==0?$active='1' : $active='1';
    $active=$myGroups->count()==0&&$joinedGroups->count()>0?$active='2' : $active='2';
    $active=$myGroups->count()>0&&$joinedGroups->count()>0?$active='2' : $active='2';
    $active=$myGroups->count()==0&&$joinedGroups->count()==0?$active='2' : $active='2';
    return view('dashboards.user.people-groups-page',[
        'countries'=>Countries::all(),
        'myGroups'=> $myGroups,
        'joinedGroups'=> $joinedGroups,
        'users'=> $users,
        'active' => $active,
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
    foreach ($request->members as $member) {
        if ($groupMemberRequest=GroupMemberRequest::where('member_id',$member)->where('group_id',$request->groupId)->first()) {
            if (GroupMembers::where('member_id',$member)->where('group_id',$request->groupId)->where('status',false)->first()) {
                $groupMemberRequest->update([
                    'status' => null,
                ]);   
            }
        } else {
            GroupMemberRequest::create([
                'member_id' => $member,
                'group_id' => $request->groupId,
            ]);
        }
    }

    return back()->with('success', 'Request Send to Members Successfully' );
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

 public function deleteGroup(Request $request)
 {
    $group=Group::findOrFail($request->groupId)->delete();

    if($group)
    {
        return back()->with('success', 'Group Deleted Successfully' );
    }
    else
    {
        return back()->with('error', 'Unable to Delete Group' );
    }
    

 }

 public function leaveGroup(Request $request)
 {
    $groupMember=GroupMembers::where('group_id',$request->groupId)->where('member_id',Auth::user()->id)->first();

    $groupMember->update([
        'status' => false,
    ]);
    
    if($groupMember)
    {
        return back()->with('success', 'Group Left Successfully' );
    }
    else
    {
        return back()->with('error', 'Unable to Leave Group' );
    }
    

 }

 public function blockGroup(Request $request)
 {
    $groupBlockList=GroupBlockList::where('group_id',$request->groupId)->where('member_id',Auth::user()->id)->first();

    if ($groupBlockList) {
        $groupBlockList->update([
            'status' => true,
        ]);
    } else {
        $groupBlockList=GroupBlockList::create([
            'group_id' => $request->groupId,
            'member_id' => Auth::user()->id,
            'status' => true,
        ]);
    }

    $groupMember=GroupMembers::where('group_id',$request->groupId)->where('member_id',Auth::user()->id)->first();

    $groupMember->update([
        'status' => false,
    ]);
    
    if($groupMember)
    {
        return back()->with('success', 'Group Blocked Successfully' );
    }
    else
    {
        return back()->with('error', 'Unable to Block Group' );
    }
 }

 public function unblockGroup(Request $request)
 {
    $groupBlockList=GroupBlockList::where('group_id',$request->groupId)->where('member_id',Auth::user()->id)->first();

    if ($groupBlockList) {
        $groupBlockList->update([
            'status' => false,
        ]);
    } else {
       
    }

    
    if($groupBlockList)
    {
        return back()->with('success', 'Group unblocked Successfully' );
    }
    else
    {
        return back()->with('error', 'Unable to unblock Group' );
    }
 }
  
}









