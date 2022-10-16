<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class GroupsList extends Component
{
    public function render()
    {
        $joinedGroups=Group::whereRelation('members', 'member_id', Auth::user()->id)->where('status',true)->take(6)->get();
        return view('livewire.groups-list',[
            'joinedGroups' => $joinedGroups,
        ]);
    }
}
