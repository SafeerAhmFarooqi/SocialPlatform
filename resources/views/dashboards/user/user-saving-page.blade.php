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
            @foreach ($usedVouchers as $usedVoucher)
            <div class="card-body">
              <div class="d-flex mb-3">
                <div class="avatar avatar-lg status-online me-2">
                  <a href="#!"><img class="avatar-img rounded-circle" src="{{$usedVoucher->voucher->image_path?'storage/'.$usedVoucher->voucher->image_path : asset('assets/ressoli-theme/assets/images/icon/person-outline-filled.svg')}}" alt=""></a>
                </div>

                <div class="ms-2 w-100">
                  <div class="d-sm-flex justify-content-between">
                    <h6><a href="#!">{{$usedVoucher->voucher->title??''}} </a></h6>
                     <!-- Dropdown START -->
                    <div class="dropdown ms-auto">
                      <a href="#" class="text-secondary" id="bdayActionEdit" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-gift"></i>
                      </a>

                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bdayActionEdit">
                        <li><a class="dropdown-item" href="#"> <i class="fa fa-gift fa-fw pe-1"></i>{{$usedVoucher->voucher->code??''}}</a></li>
                         
                      </ul>
                    </div>

                </div>
                <div class="position-relative w-100">
                 <span class="badge bg-danger bg-opacity-10 text-success" style="color:#333 !important">{{$usedVoucher->voucher->discount??''}}</span>
                 
                </div>
              </div>
            </div>
            <hr class="my-4">
      </div>
            @endforeach
           
          <!-- Card body END -->
          </div>
          <!-- Card END -->

          <!-- Card START -->
           
          <!-- Card END -->
      </div>



      <div class="col-sm-3">
            <div class="card">
              <!-- Card header START -->
            
              <!-- Card header END -->
              <!-- Card body START -->
              <div class="card-body">
              <h3 style="text-align: center;"><span style="font-size:16px"> Savings</span> <br><b style="font-size: 60px;padding-top:30px">  {{$saving}} € </b></h3>

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