<div wire:poll.5000ms>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @if ($groupMemberRequests->count()>0)
    <div class="col-sm-6 col-lg-12">
        <div class="card">
          <!-- Card header START -->
          <div class="card-header pb-0 border-0">
            <h5 class="card-title mb-0">Groups Invitation(s)</h5>
          </div>
          <!-- Card header END -->
          <!-- Card body START -->
          <div class="card-body">
            <!-- News item -->
            @foreach ($groupMemberRequests as $groupMemberRequest)
            <div class="mb-3">
                <h6 class="mb-0"><a href="#">{{($groupMemberRequest->group->owner->firstname??'').' '.($groupMemberRequest->group->owner->lastname??'')}}</a> Send you Request</h6>
                <small><a href="javascript:;" wire:click="$set('selectedGroupMemberRequest', {{$groupMemberRequest->id}})" data-bs-toggle="modal"  data-bs-target="#accept-request" style="margin-right: 20px;color: rgb(0, 255, 89);">Accept</a><a href="javascript:;" style="color: red;" wire:click="$set('selectedGroupMemberRequest', {{$groupMemberRequest->id}})" data-bs-toggle="modal"  data-bs-target="#reject-request">Reject</a></small>
              </div>
            @endforeach
           
            <!-- News item --> 
          
            <!-- Load more comments -->
           
          </div>
          <!-- Card body END -->
        </div>
      </div>

      <div class="modal fade" id="accept-request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Accept Group Invitation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
             <h6>Group Title : {{$currentGroupMemberRequest->group->title??''}}</h6>
             <h6>Owner Name : {{($currentGroupMemberRequest->group->owner->firstname??'').' '.($currentGroupMemberRequest->group->owner->lastname??'')}}</h6>
             <h6>Created Date : {{($currentGroupMemberRequest->group->created_at??\Carbon\Carbon::now())->format('F d,y')??''}}</h6>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" wire:click="acceptInvitation">Accept</button>
            
              
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="reject-request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reject Group Invitation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
             <h6>Group Title : {{$currentGroupMemberRequest->group->title??''}}</h6>
             <h6>Owner Name : {{($currentGroupMemberRequest->group->owner->firstname??'').' '.($currentGroupMemberRequest->group->owner->lastname??'')}}</h6>
             <h6>Created Date : {{($currentGroupMemberRequest->group->created_at??\Carbon\Carbon::now())->format('F d,y')??''}}</h6>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger" wire:click="rejectInvitation">Reject</button>
            
              
            </div>
          </div>
        </div>
      </div>
    @endif
  
</div>

