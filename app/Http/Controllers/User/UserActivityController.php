<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Posts;
use App\Models\Comments;
use App\Models\Group;
use App\Models\GroupBlockList;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class UserActivityController extends BaseUserController
{
 public function activityPage()
 {
  $postActivities = Posts::select('created_at')->where('user_id',Auth::user()->id)->get();
  $commentActivities = Comments::select('created_at')->where('user_id',Auth::user()->id)->get();
  $groupActivities = Group::select('created_at')->where('created_by',Auth::user()->id)->get();
  $activities=$postActivities->concat($commentActivities)->concat($groupActivities);
  $activities = $activities->sortBy([
    ['created_at', 'desc'],
  ]);
  // foreach ($activities as $key => $value) {
  //   echo $value->getTable().'<br>';
  // }
  // return ;
  $blockGroups=GroupBlockList::where('member_id',Auth::user()->id)->where('status',true)->get();
    return view('dashboards.user.user-activity-log-page',[
         'blockGroups' => $blockGroups,
         'active' => 2,
         'activities' => $activities,
   ]);
 }  
}