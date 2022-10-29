@extends('layouts.ressoli-theme')
@section('body-content')
        @include("dashboards.user.includes.topbar")  

        <style>
 @media (min-width:130px) and (max-width:669px) {

#radar {
    position: absolute;
   
    width: 19em;
    height: 19em;
    background-color: rgba(255,255,255,0.1);
    border-radius: 50%;
      right: 6%;
    transform: translateY(-50%);
    border: solid 1px rgba(255,255,255,0.5);
}

.gap-4{
  height: 95vh;
}

.beacon {
    left: 50%;
    top: 50%;
    border-style: solid;
    border-width: 1px 125px 10px 7px;
    border-color: transparent;
    border-right-color: #0c0;
    margin-top: -8px;
    transform-origin: 0 50%;
    animation: spin 5s linear infinite;
}



}



        </style>
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
                  <div class="col-sm-9 vstack gap-4" style="background:url({{asset('assets/ressoli-theme/assets/nearbyimage.png')}})">
  <livewire:people-nearby/> 
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


