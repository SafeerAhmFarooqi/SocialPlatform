<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card-body">
        <!-- Connection item START -->

        @if ($joinedGroups->count()==0)
        <div class="d-grid mt-3" style="margin:0 !important">
            <a class="btn btn-sm btn-warning-soft" href="{{route('user.dashboard.groups')}}">No Groups Found Please Create New  Group</a>
          </div>
        @endif
         


        @foreach ($joinedGroups as $joinedGroup)
        <div class="hstack gap-2 mb-3">
            <!-- Avatar -->
            <div class="avatar">
              <a href="#!"><img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/bg/04.jpg')}}" alt=""></a>
            </div>
            <!-- Title -->
            <div class="overflow-hidden">
              <a class="h6 mb-0" href="#!">{{$joinedGroup->title??''}} </a>
              <p class="mb-0 small text-truncate">{{$joinedGroup->members->count()??''}} Members</p>
            </div>
            <!-- Button -->
            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="{{route('user.dashboard.groups.post',[$joinedGroup->id])}}"><i class="fa-solid fa-plus"> </i></a>
          </div>
        @endforeach
      


        <!-- Connection item START -->
       



        <!-- Connection item START -->
       



        <!-- View more button -->
        <div class="d-grid mt-3">
          <a class="btn btn-sm btn-primary-soft" href="{{route('user.dashboard.groups')}}">View All Groups</a>
        </div>
      </div>
</div>
