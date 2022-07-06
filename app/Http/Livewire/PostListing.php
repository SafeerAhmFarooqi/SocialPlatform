<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Posts;

class PostListing extends Component
{
    public function render()
    {
        $posts=Posts::orderBy('created_at','DESC')->get();
        return view('livewire.post-listing',[
            'posts'=>$posts,
        ]);
    }
}
