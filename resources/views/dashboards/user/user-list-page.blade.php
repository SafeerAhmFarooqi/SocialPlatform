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

                                    <div class="col-sm-3">
                    <!-- Friends item START -->
                    <div class="card shadow-none text-center h-100">
                      
                      <div class="card-body p-2 pb-0">
                        <div class="avatar avatar-story avatar-xl">
                          <a href="{{route('user.dashboard.user.information',[$user->id])}}"><img class="avatar-img rounded-circle" src="{{
                            $user->profile_pic_path
                            ? (
                              $user->accountSetting
                              ? (
                                $user->accountSetting->profile_image
                                ? asset('storage/'.$user->profile_pic_path) 
                                : asset('assets/FriendFinder-Theme/images/users/empty.jpg') 
                              )
                              : asset('assets/FriendFinder-Theme/images/users/empty.jpg')
                            )
                            : asset('assets/FriendFinder-Theme/images/users/empty.jpg')
                          }}" alt=""></a>
                        </div>
                        <h6 class="card-title mb-1 mt-3"> <a href="{{route('user.dashboard.user.information',[$user->id])}}"> {{substr($user->firstname.' '.$user->lastname,0,25)}}</a></h6>
                        <p class="mb-0 small lh-sm">16 Followers</p>
                      </div>
                      <!-- Card footer -->
                      <div class="card-footer p-2 border-0">
                        <a href="javascript:;" onclick="myFunction({{$user->id}})" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Send message"> <i class="bi bi-chat-left-text"></i> </a>
                        <a href="{{route('user.dashboard.user.information',[$user->id])}}" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Public Profile"> <i class="bi bi-person"></i> </a>
                      </div>
                    </div>
                    
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