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
                    <h1>Support Page</h1>
            


           




 

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