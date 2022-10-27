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
                  <h1 class="h4 card-title mb-lg-0">Activity Log</h1>
                
                
                </div>
                
                <div class="col-sm-10">
                  <div class="col-sm-6 col-lg-3 text-right" style="float:right">
                  <!-- Button modal -->
                 
                </div>

            </div>
              @include('common.validation')
              </div>
            </div>
            <!-- Card header START -->
            <!-- Card body START -->
            <div class="card-body">
              <ul class="nav nav-tabs nav-bottom-line justify-content-center justify-content-md-start">
  
                <li class="nav-item"> <a class="nav-link {{$active==1?'active' : ''}}" data-bs-toggle="tab" href="#tab-2"> Activity Log </a> </li>
                <li class="nav-item"> <a class="nav-link {{$active==2?'active' : ''}}" data-bs-toggle="tab" href="#tab-3"> Blocked Groups </a> </li> 
              </ul>
              <div class="tab-content mb-0 pb-0">

                <!-- Friends groups tab START -->
            




                 <!-- Friends groups tab START -->
                <div class="tab-pane fade show {{$active==1?'active' : ''}}" id="tab-2">
                  <div class="row g-4">
                    @foreach ($activities as $activity)
                    <div class="card-body">
                      <div class="d-flex">
                        {{-- <div class="avatar avatar-lg status-online me-2">
                          <a href="#!"><img class="avatar-img rounded-circle" src="{{$unusedVoucher->image_path?'storage/'.$unusedVoucher->image_path : asset('assets/ressoli-theme/assets/images/icon/person-outline-filled.svg')}}" alt=""></a>
                        </div> --}}
  
                        <div class="ms-2 w-100">
                          <div class="d-sm-flex justify-content-between">
                            <h6>{{$activity->getTable()=='groups'&&$activity->created_at?'Group created by you at' 
                                            : ($activity->getTable()=='posts'&&$activity->created_at?'Post created by you at'
                                            : ($activity->getTable()=='comments'&&$activity->created_at?'Comment created by you at' 
                                            : ''))
                                            
                                }}</h6>
                             <!-- Dropdown START -->
                            {{-- <div class="dropdown ms-auto">
                              <a href="#" class="text-secondary" id="bdayActionEdit" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-gift"></i>
                              </a>
  
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bdayActionEdit">
                                <li><a class="dropdown-item" href="#"> <i class="fa fa-gift fa-fw pe-1"></i>234234234</a></li>
                                 
                              </ul>
                            </div> --}}
  
                        </div>
                        <div class="position-relative w-100">
                         <span class="badge bg-danger bg-opacity-10 text-success" style="color:#333 !important">{{$activity->created_at->format('F d,Y H:i')}}</span>
                         
                        </div>
                      </div>
                    </div>
                    <hr class="my-4">
              </div>
                    @endforeach
                  
                
                  </div>
                  <!-- Friends' groups tab END -->

      
            </div>





                 <!-- Friends groups tab START -->
                <div class="tab-pane fade show {{$active==2?'active' : ''}}" id="tab-3">
                  <div class="row g-4">
                    @foreach ($blockGroups as $blockGroup)
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
                            <h5 class="mb-0"> <a href="group-details.html">{{$blockGroup->group->title??''}}</a> </h5>
                            <small> <a href="#" data-bs-toggle="modal" data-bs-target="#delete-group-"><i class="bi bi-trash pe-1"></i></a> <span class="badge bg-danger bg-opacity-10 text-{{$blockGroup->group->status?'success' : 'warning'}}">{{$blockGroup->group->status?'Active' : 'Pending Approval'}}</span> </small>
                            <!-- Group stat START -->
                            <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                              <!-- Group stat item -->
                              <div>
                                <h6 class="mb-0">{{$blockGroup->group->members->count()??0}}</h6>
                                <small>Members</small>
                              </div>
                              <!-- Divider -->
                              <div class="vr"></div>
                              <!-- Group stat item -->
                              <div>
                                <h6 class="mb-0">{{$blockGroup->group->posts->count()??0}}</h6>
                                <small>Post  </small>
                              </div>
                            </div>
                            <!-- Group stat END -->
                          
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                       
                        @if ($blockGroup->group->status==1)
                        <div class="card-footer text-center">
                      
                            <a class="btn btn-success-soft btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#unblock-{{$blockGroup->group->id}}"> Unblock   </a>
                         
           
                        </div>
                        @endif
                 <!-- Card Footer END -->
                </div>
                <!-- Card END -->
              </div>
           

              <div class="modal fade" id="unblock-{{$blockGroup->group->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{$blockGroup->group->title??''}}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to unblock this group?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form action="{{route('user.dashboard.groups.unblock')}}" method="post">
                        @csrf
                        <input type="hidden" name="groupId" value="{{$blockGroup->group->id}}">
                        <button type="submit" class="btn btn-success">Unblock</button>
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