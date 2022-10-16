<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\GroupBlockList;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class UserActivityController extends BaseUserController
{
 public function activityPage()
 {
   $blockGroups=GroupBlockList::where('member_id',Auth::user()->id)->where('status',true)->get();
    return view('dashboards.user.user-activity-log-page',[
         'blockGroups' => $blockGroups,
         'active' => 2,
   ]);
 }  
}