@extends('dashboards.user.dashboard-layout')
@section('body-content')
        @include("dashboards.user.includes.topbar")   
        <main>
            <!-- Container START -->
            <div class="container">
              <div class="row g-4">
                <!-- Sidenav START -->
                <div class="col-lg-3">
          
                  <!-- Advanced filter responsive toggler START -->
                  <div class="d-flex align-items-center d-lg-none">
                    <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                      <i class="btn btn-primary fw-bold fa-solid fa-sliders-h"></i>
                      <span class="h6 mb-0 fw-bold d-lg-none ms-2">My profile</span>
                    </button>
                  </div>
                  <!-- Advanced filter responsive toggler END -->
                  
                  <!-- Navbar START-->
                  <nav class="navbar navbar-expand-lg mx-0"> 
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                      <!-- Offcanvas header -->
                      <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                     @include('dashboards.user.includes.sidebarleft')
                    </div>
                  </nav>

                  
                </div>
                 
              

             <div class="card col-sm-9">
            <!-- Card header START -->
            <div class="card-header border-0 pb-0">
              <div class="row g-2">
                <div class="col-lg-2">
                  <!-- Card title -->
                  <h1 class="h4 card-title mb-lg-0">Groups</h1>
                </div>
                
                <div class="col-sm-10">
                  <div class="col-sm-6 col-lg-3 text-right" style="float:right">
                  <!-- Button modal -->
                  <a class="btn btn-primary-soft ms-auto w-100" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa-solid fa-plus pe-1"></i> Create group</a>
                </div>
            </div>
              </div>
            </div>
            <!-- Card header START -->
            <!-- Card body START -->
            <div class="card-body">
              <ul class="nav nav-tabs nav-bottom-line justify-content-center justify-content-md-start">
  
                <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab" href="#tab-2"> Joined Groups </a> </li>
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-3"> My Groups </a> </li> 
              </ul>
              <div class="tab-content mb-0 pb-0">

                <!-- Friends groups tab START -->
            




                 <!-- Friends groups tab START -->
                <div class="tab-pane fade show active" id="tab-2">
                  <div class="row g-4">
                    @foreach ($joinedGroups as $joinedGroup)
                    <div class="col-sm-6 col-lg-4">
                      <!-- Card START -->
                      <div class="card">
                        <div class="h-80px rounded-top" style="background-image:url({{asset('assets/ressoli-theme/assets/images/bg/01.jpg')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                          <!-- Card body START -->
                          <div class="card-body text-center pt-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-lg mt-n5 mb-3">
                               <a href="group-details.html"><img class="avatar-img rounded-circle border border-white border-3 bg-white" src="{{asset('assets/ressoli-theme/assets/images/bg/01.jpg')}}" alt=""></a>
                            </div>
                            <!-- Info -->
                            <h5 class="mb-0"> <a href="group-details.html">{{$joinedGroup->title??''}}</a> </h5>
                            <small> <i class="bi bi-globe pe-1"></i> <span class="badge bg-danger bg-opacity-10 text-{{$joinedGroup->group_status?'success' : 'danger'}}">{{$joinedGroup->group_status?'Active' : 'Deactive'}}</span> </small>
                            <!-- Group stat START -->
                            <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                              <!-- Group stat item -->
                              <div>
                                <h6 class="mb-0">{{$joinedGroup->members->count()??''}}</h6>
                                <small>Members</small>
                              </div>
                              <!-- Divider -->
                              <div class="vr"></div>
                              <!-- Group stat item -->
                              <div>
                                <h6 class="mb-0">20</h6>
                                <small>Post  </small>
                              </div>
                            </div>
                            <!-- Group stat END -->
                          
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                        @if ($joinedGroup->group_status==1)
                        <div class="card-footer text-center">
                          <a class="btn btn-success-soft btn-sm" href="{{route('user.dashboard.groups.post',[$joinedGroup->id])}}"> Enter   </a>
                        </div>
                        @endif
                       
                        <!-- Card Footer END -->
                      </div>
                      <!-- Card END -->
                    </div>
                    @endforeach
                  
                
                  </div>
                  <!-- Friends' groups tab END -->

      
            </div>





                 <!-- Friends groups tab START -->
                <div class="tab-pane fade show" id="tab-3">
                  <div class="row g-4">
                    @foreach ($myGroups as $myGroup)
                    <div class="col-sm-6 col-lg-4">
                      <!-- Card START -->
                      <div class="card">
                        <div class="h-80px rounded-top" style="background-image:url({{asset('assets/ressoli-theme/assets/images/bg/01.jpg')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                          <!-- Card body START -->
                          <div class="card-body text-center pt-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-lg mt-n5 mb-3">
                               <a href="group-details.html"><img class="avatar-img rounded-circle border border-white border-3 bg-white" src="{{asset('assets/ressoli-theme/assets/images/bg/01.jpg')}}" alt=""></a>
                            </div>
                            <!-- Info -->
                            <h5 class="mb-0"> <a href="group-details.html">{{$myGroup->title??''}}</a> </h5>
                            <small> <i class="bi bi-globe pe-1"></i> <span class="badge bg-danger bg-opacity-10 text-{{$myGroup->group_status?'success' : 'danger'}}">{{$myGroup->group_status?'Active' : 'Deactive'}}</span> </small>
                            <!-- Group stat START -->
                            <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                              <!-- Group stat item -->
                              <div>
                                <h6 class="mb-0">{{$myGroup->members->count()??''}}</h6>
                                <small>Members</small>
                              </div>
                              <!-- Divider -->
                              <div class="vr"></div>
                              <!-- Group stat item -->
                              <div>
                                <h6 class="mb-0">20</h6>
                                <small>Post  </small>
                              </div>
                            </div>
                            <!-- Group stat END -->
                          
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                       
                        @if ($myGroup->group_status==1)
                        <div class="card-footer text-center">
                          @if ($myGroup->owner_id==Auth::user()->id) 
                            <a class="btn btn-success-soft btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2-{{$myGroup->id}}"> Add Members   </a>
                          @endif
                          <a class="btn btn-success-soft btn-sm" href="{{route('user.dashboard.groups.post',[$myGroup->id])}}"> Enter   </a>
                        </div>
                        @endif
                 <!-- Card Footer END -->
                </div>
                <!-- Card END -->
              </div>
              <div class="modal fade" id="exampleModal2-{{$myGroup->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Members</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('user.dashboard.groups.member.store')}}" method="post">
                        @csrf
                      <input type="hidden" name="groupId" value="{{$myGroup->id}}">
                        <div class="mb-3">
                          <label for="sel1">Members</label>
                          <select class="form-control" name="members[]" multiple="">
                          <option value="">Select Members</option>
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->firstname}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                      </form>
                    </div>
                   
                  </div>
                </div>
              </div>
              @endforeach
                  </div>
                  <!-- Friends' groups tab END -->

      
            </div>




          </div>
          <!-- Card body END -->
        </div>










              </div> <!-- Row END -->
            </div>
            <!-- Container END -->
          
          </main>
          <!-- **************** MAIN CONTENT END **************** -->
          
          <!-- Main Chat START -->
          {{-- @include('dashboards.user.includes.chat') --}}
           <!-- Main Chat END -->
          
          <!-- Modal create Feed START -->
          {{-- @include('dashboards.user.includes.modals') --}}
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create New Group</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{route('user.dashboard.groups.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Group Name:</label>
                      <input type="text" class="form-control" id="recipient-name" name="group_title">
                    </div>
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Location:</label>
                      <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
          </div>

         
     
@endsection



@section('pageScripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'location';
    
        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode']
               
            });
        
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
            });
        });
</script>
@endsection