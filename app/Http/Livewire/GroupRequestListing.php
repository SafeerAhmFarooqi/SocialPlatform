<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\GroupMemberRequest;
use App\Models\GroupMembers;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class GroupRequestListing extends Component
{
    public $selectedGroupMemberRequest;
    public $currentGroupMemberRequest;

    public function acceptInvitation()
    {
        $groupMemberRequest=GroupMemberRequest::find($this->selectedGroupMemberRequest);

        $groupMemberRequest->update([
            'status' => true,
        ]);

        if ($groupmember=GroupMembers::where('member_id',Auth::user()->id)->where('group_id',$groupMemberRequest->group_id)->first()) {
            if (Group::where('id',$groupMemberRequest->group_id)->where('status',true)->first()) {
                $groupmember->update([
                    'status' => true,
                ]);

                session()->flash('success', 'You are now the member of this group');

                return redirect()->to('/dashboard');
            } else {
                session()->flash('error', 'Group Is Either Deleted or Not Approved Any More');
 
                return redirect()->to('/dashboard');
            }
            
        } else {
            if (Group::where('id',$groupMemberRequest->group_id)->where('status',true)->first()) {
                $groupMember=GroupMembers::create([
                    'member_id' => Auth::user()->id,
                    'group_id' => $groupMemberRequest->group_id,
                    'status' => true,
                ]);

            if ($groupMember) {
                session()->flash('success', 'You are now the member of this group');
                return redirect()->to('/dashboard');
            } else {
                session()->flash('error', 'Something Went Wrong Contact Administration');
                return redirect()->to('/dashboard');
            }
                             
            } else {
                session()->flash('error', 'Group Is Either Deleted or Not Approved Any More');
 
                return redirect()->to('/dashboard');
            }


        }
        
    }

    public function rejectInvitation()
    {
        $groupMemberRequest=GroupMemberRequest::find($this->selectedGroupMemberRequest);

        $groupMemberRequest->update([
            'status' => false,
        ]);

        session()->flash('error', 'You have rejected Group Invitation');
 
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        $this->currentGroupMemberRequest=GroupMemberRequest::find($this->selectedGroupMemberRequest);
        $groupMemberRequests=GroupMemberRequest::where('member_id',Auth::user()->id)->where('status',null)->get();
        return view('livewire.group-request-listing',[
            'groupMemberRequests' => $groupMemberRequests,
        ]);
    }
}
