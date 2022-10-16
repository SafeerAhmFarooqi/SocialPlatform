<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Posts;
use App\Models\GroupPost;
use App\Models\Comments;
use App\Models\GroupComment;
use Illuminate\Support\Facades\Session;

class GroupPostListing extends Component
{
    public $commentText='';
    public $selectedPostId='';
    public $groupId=0;

    protected $validationAttributes = [
        'commentText' => 'Comment',
    ];

    protected $messages = [
        'required' => ':attribute is Required',        
    ];

    protected function rules()
    {
        return [
            'commentText' => ['required', 'string', 'max:1000'],
        ];
    }

    public function submit()
    {
        $this->validate();
      
            $comment = GroupComment::create([
                'comment' => $this->commentText,
                'post_id' => $this->selectedPostId,
                'group_id' => $this->groupId,
                'status' => true,
            ]);
       
        
     

        $this->commentText='';
        $this->selectedPostId='';

        if ($comment) {
            Session::flash('success', __('Comment Submitted Successfully'));    
        }
        else
        {
            Session::flash('error', __('Unable to Submit Comment'));
        }
    }

    public function deletePost($id)
    {
        GroupPost::find($id)->delete();
    }

    public function deleteComment($id)
    {
        GroupComment::find($id)->delete();
    }
    
    public function render()
    {
        $posts=GroupPost::orderBy('created_at','DESC')->where('group_id',$this->groupId)->where('status',true)->get();
        return view('livewire.group-post-listing',[
            'posts'=>$posts,
        ]);
    }
}
