<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PublishPost extends Component
{
    use WithFileUploads;

    public $postText='';
    public $postImage='';
    public $selectedType;

    protected $validationAttributes = [
        'postText' => 'Post Text',
        'postImage' => 'Image',
        'selectedType' => 'Type',
    ];

    protected $messages = [
        'required' => ':attribute is Required',        
    ];

    public function mount()
    {
        Auth::user()->options=='Armed Forces'? $this->selectedType=1 : '';
        Auth::user()->options=='Police'? $this->selectedType=2 : '';
        Auth::user()->options=='Fire'? $this->selectedType=3 : '';
        Auth::user()->options=='TWH'? $this->selectedType=4 : '';
        Auth::user()->options=='Paramedic'? $this->selectedType=5 : '';
    }

    protected function rules()
    {
        return [
            'postText' => [ 'string', 'max:10000'],
            'postImage' => [ 'image', 'mimes:png,jpeg,jpg,gif,bmp','max:5024'],
            'selectedType' => [ 'required'],
        ];
    }

    public function submit()
    {
        $this->validate();

        if (!$this->postImage&&!$this->postText) {
            Session::flash('error', __('Post is empty'));
            return;
        }

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

        $post = Posts::create([
            'post_text' => $this->postText,
            'image_path' => $filePath,
            'type_id' => $this->selectedType,
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
        return view('livewire.publish-post');
    }
}
