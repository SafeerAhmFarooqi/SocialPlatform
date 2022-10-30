@extends('layouts.ressoli-theme')
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
                 @yield("page-content")  
               <div class="card col-sm-9">
              <!-- Card header START -->
         
              <!-- Card body START -->
              <div class="card-body position-relative pt-0">
                <div class="row g-3" style="padding:30px">

            

@foreach ($users as $user)

<div class="col-sm-6 col-xl-4">
                      <!-- Event item START -->
                      <div class="card h-100">

                        <div class="h-80px rounded-top" style="background-image:url({{asset('assets/ressoli-theme/assets/images/events/01.jpg')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>


                        <div class="position-relative" style="text-align: center;margin-top: -13%;">
                          <img class="img-fluid rounded-top" src="https://ressoli.asadsohail.com/assets/FriendFinder-Theme/images/users/empty.jpg " alt="" style="max-width:100px">
                           
                        </div>
                        <!-- Card body START -->
                        <div class="card-body position-relative pt-0">
                          <!-- Tag -->
                           <h6 class="mt-3" style="text-align:center;"> <a href="event-details.html">{{substr($user->firstname.' '.$user->lastname,0,25)}} </a> </h6>
                       
                           
                          <!-- Avatar group END -->
                          <!-- Button -->
                          <div class="d-flex mt-3 justify-content-between">
                            <!-- Interested button -->
                            <div class="w-100">
                             <a href="{{route('user.dashboard.user.information',[$user->id])}}">
                              <label class="btn btn-sm btn-outline-success d-block" for="Interested1"><i class="fa-solid fa-thumbs-up me-1"></i> Profile</label>
                            </a>
                            </div>
                            <div class="dropdown ms-3">
                              <a href="javascript:;" onclick="myFunction({{$user->id}})" class="btn btn-sm btn-primary-soft" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Send message"> 
                                  <i class="bi bi-chat-left-text-fill fs-6"> </i>
                              </a>

                             <!--  <a href="#" class="btn btn-sm btn-primary-soft"  >
                               <i class="bi bi-chat-left-text-fill fs-6"> </i>
                              </a> -->
                              
                            </div>
                          </div>
                        </div>
                        <!-- Card body END -->
                     </div>
                     <!-- Event item END -->
                    </div>




 
                  <iframe id="{{$user->id}}" style="visibility:visible;width: 350px; height: 416px; border: 1px solid rgb(214, 214, 214); display: none;position: fixed;
                    bottom: 100px;
                    right: 15px;
                    border: 3px solid #f1f1f1;
                    z-index: 9;" onload="this.style.visibility = 'visible';" src="chat/{{$user->id}}"></iframe>
                 
 @endforeach





 

                </div>
              </div>
              <!-- Card body END -->
            </div>










              </div> <!-- Row END -->
            </div>
            <!-- Container END -->
            <button class="open-button" id="close-chat" onclick="closeChat()"><img src="{{asset('assets/ressoli-theme/assets/crossiconchat.png')}}"></button>
          </main>
          <!-- **************** MAIN CONTENT END **************** -->
          
          <!-- Main Chat START -->
          {{-- @include('dashboards.user.includes.chat') --}}
           <!-- Main Chat END -->
          
          <!-- Modal create Feed START -->
          {{-- @include('dashboards.user.includes.modals') --}}

     
@endsection

@section('pageStyles')
    <style>
      .open-button {
    /* background-color: #555; */
    /* color: white; */
    /* padding: 16px 20px; */
    /* border: none; */
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 85px;
    display: none;
    border: none;
}


/*      .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
  display : none;
}*/
    </style>
@endsection

@section('pageScripts')
    <script>
      function myFunction(id)
      {
         // alert(id);
          // document.querySelectorAll('iframe').forEach( iframe => {
          //   alert(iframe..style.display);
          // });
          $('iframe').hide();
          $('#close-chat').hide();
          $('#close-chat').show();
          document.getElementById(id).style.display = "inline";
      }
      function closeChat()
      {
        $('iframe').hide();
          $('#close-chat').hide();
      }
    </script>

@endsection