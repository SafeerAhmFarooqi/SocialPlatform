<div class="col-md-2 static">
    <div class="suggestions" id="sticky-sidebar">
      @if (isset($group))
      <h4 class="grey">Group Members</h4>
      @foreach ($group->members as $member)
      <div class="follow-user">
        <img src="{{$member->user->profile_pic_path? asset('storage/'.$member->user->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="" class="profile-photo-sm pull-left" />
        <div>
          <h5><a href="#">{{$member->user->firstname.' '.$member->user->lastname}}</a></h5>
          {{-- <a href="#" class="text-green">Add friend</a> --}}
        </div>
      </div>    
      @endforeach
      @endif 
    </div>
  </div>