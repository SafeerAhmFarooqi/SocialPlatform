<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Posts;
use App\Models\GroupPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GroupPublishPost extends Component
{
    use WithFileUploads;

    public $postText='';
    public $postImage='';
    public $groupId=0;

    protected $validationAttributes = [
        'postText' => 'Post Text',
        'postImage' => 'Image',
    ];

    protected $messages = [
        'required' => ':attribute is Required',        
    ];

    protected function rules()
    {
        return [
            'postText' => ['required', 'string', 'max:10000'],
            'postImage' => [ 'image', 'mimes:png,jpeg,jpg,gif,bmp','max:5024'],
        ];
    }

    public function submit()
    {
        $this->validate();

        if($this->postImage)
        {
            $file=$this->postImage;
            $filename= $file->hashName();
            $file->store('PostPics/'.Auth::user()->id.'/','public');
            $filePath='PostPics/'.Auth::user()->id.'/'.$filename;
        }
        else{
            $filePath=null;
        }

        $post = GroupPost::create([
            'post_text' => $this->postText,
            'image_path' => $filePath,
            'group_id' => $this->groupId??0,
            'status' => true,
        ]);

        $this->postText='';
        $this->postImage='';

        if ($post) {
            Session::flash('success', __('Post Submitted Successfully'));    
        }
        else
        {
            Session::flash('error', __('Unable to Submit Post'));
        }
    }
    public function render()
    {
        return view('livewire.group-publish-post');
    }
}
