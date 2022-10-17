<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Group;
use App\Models\Voucher;
use App\Models\Posts;
use App\Models\GroupPost;

class PostAdminController extends BaseAdminController
{

 public function allUserPostShow()
 {
    // return "safeer";
    $posts = Posts::all();
    return view('dashboards.shop-admin.admin.all-user-posts-page',['posts'=>$posts,'srNo'=>0]);
 }   
 
 public function allUserPostDelete(Request $request)
 {
    Posts::findOrFail($request->post_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Post Deleted Successfully');
 } 

 public function allGroupPostShow()
 {
    // return "safeer";
    $posts = GroupPost::all();
    return view('dashboards.shop-admin.admin.all-group-posts-page',['posts'=>$posts,'srNo'=>0]);
 }   
 
 public function allGroupPostDelete(Request $request)
 {
   GroupPost::findOrFail($request->post_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Post Deleted Successfully');
 } 
   
}









