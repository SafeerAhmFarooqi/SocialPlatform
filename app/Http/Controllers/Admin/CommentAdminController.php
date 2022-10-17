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
use App\Models\Comments;
use App\Models\GroupComment;

class CommentAdminController extends BaseAdminController
{

 public function allPostsCommentsShow()
 {
    // return "safeer";
    $comments = Comments::all();
    return view('dashboards.shop-admin.admin.all-posts-comment-page',['comments'=>$comments,'srNo'=>0]);
 }   

 public function allPostsGroupCommentsShow()
 {
    // return "safeer";
    $comments = GroupComment::all();
    return view('dashboards.shop-admin.admin.all-posts-group-comment-page',['comments'=>$comments,'srNo'=>0]);
 }   
 
 public function allPostsCommentsDelete(Request $request)
 {
    Comments::findOrFail($request->comment_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Comment Deleted Successfully');
 } 

 public function  allPostsGroupCommentsDelete(Request $request)
 {
   GroupComment::findOrFail($request->comment_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Comment Deleted Successfully');
 } 



   
}









