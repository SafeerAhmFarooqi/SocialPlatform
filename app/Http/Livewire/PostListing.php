<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Posts;
use App\Models\GroupPost;
use App\Models\Comments;
use App\Models\GroupComment;
use Illuminate\Support\Facades\Session;

class PostListing extends Component
{
    public $commentText='';
    public $selectedPostId='';
    public $selectedType=0;

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

    public function deletePost($id)
    {
        Posts::find($id)->delete();
    }

    public function deleteComment($id)
    {
        Comments::find($id)->delete();
    }

    public function render()
    {
     
        $posts=Posts::
        when($this->selectedType, function($query) {
            return $query->where('type_id', $this->selectedType);
        })
        ->orderBy('created_at','DESC')->where('status',true)->get();
       
        return view('livewire.post-listing',[
            'posts'=>$posts,
        ]);
    }
}
