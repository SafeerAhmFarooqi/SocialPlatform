<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Posts;
use App\Models\Comments;
use Illuminate\Support\Facades\Session;

class PostListing extends Component
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

        $comment = Comments::create([
            'comment' => $this->commentText,
            'post_id' => $this->selectedPostId,
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

    public function render()
    {
        $posts=Posts::orderBy('created_at','DESC')->where('group_id',$this->groupId??0)->get();
        return view('livewire.post-listing',[
            'posts'=>$posts,
        ]);
    }
}
