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
               

               <div class="col-sm-6">

        <!-- Card START -->
          <div class="card">
            <!-- Card header START -->
            <div class="card-header border-0 pb-0">
              <h1 class="h4 card-title">Vouchers</h1>
            </div>
            <!-- Card header START -->
            <!-- Card body START -->
            <div class="card-body">
              <!-- Birthdays START -->
              <div class="d-flex mb-3">
                <!-- Avatar --> 
                <div class="avatar avatar-lg status-online me-2">
                  <a href="#!"><img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/icon/person-outline-filled.svg')}}
" alt=""></a>
                </div>
                <!-- Info -->
                <div class="ms-2 w-100">
                  <div class="d-sm-flex justify-content-between">
                    <h6><a href="#!">Mega Mobile Offer </a></h6>
                     <!-- Dropdown START -->
                    <div class="dropdown ms-auto">
                      <a href="#" class="text-secondary" id="bdayActionEdit" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-gift"></i>
                      </a>
                      <!-- Dropdown menu -->
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bdayActionEdit">
                        <li><a class="dropdown-item" href="#"> <i class="fa fa-gift fa-fw pe-1"></i> Xucas551</a></li>
                         
                      </ul>
                    </div>
                    <!-- Dropdown END -->
                </div>
                <div class="position-relative w-100">
                 <span class="badge bg-danger bg-opacity-10 text-success" style="color:#333 !important"> 10% Off on all mobile assessories</span>
                 
                </div>
              </div>
            </div>
            <!-- Birthdays END -->

            <!-- Divider -->
            <hr class="my-4">

      
            <!-- Birthdays END -->
          </div>
          <!-- Card body END -->
          </div>
          <!-- Card END -->

          <!-- Card START -->
           
          <!-- Card END -->
      </div>



      <div class="col-sm-3">
            <div class="card">
              <!-- Card header START -->
              <div class="card-header pb-0 border-0">
                <h5 class="card-title mb-0">Filters</h5>
              </div>
              <!-- Card header END -->
              <!-- Card body START -->
              <div class="card-body">
              	<div class="form-group col-sm-12" style="padding-bottom:20px">
			       <label for="sel1">  City </label>
			       <select class="form-control" id="sel1" name="location" wire:model="selectCity">
			         <option value="">Lahore</option>
			         <option value="">Lahore</option>
			         <option value="">Lahore</option>
			        </select>
			     </div>


              	<div class="form-group col-sm-12" style="padding-bottom:20px">
			       <label for="sel1">   Category  </label>
			       <select class="form-control" id="sel1" name="location" wire:model="selectCity">
			         <option value="">Lahore</option>
			         <option value="">Lahore</option>
			         <option value="">Lahore</option>
			        </select>
			     </div>



              	<div class="form-group col-sm-12" style="padding-bottom:20px">
			       <label for="sel1">   Sub Category  </label>
			       <select class="form-control" id="sel1" name="location" wire:model="selectCity">
			         <option value="">Lahore</option>
			         <option value="">Lahore</option>
			         <option value="">Lahore</option>
			        </select>
			     </div>
 
             
              </div>
              <!-- Card body END -->
            </div>
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