@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-8 col-lg-6 vstack gap-4">
    <!-- Story START -->
    <div class="tiny-slider arrow-hover overflow-hidden">
      <div class="tiny-slider-inner ms-n4" data-arrow="true" data-dots="true" data-loop="false" data-autoplay="false" data-items-xl="4" data-items-lg="3" data-items-md="3" data-items-sm="3" data-items-xs="2" data-gutter="12" data-edge="30">

        

        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social8.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="#!" class="stretched-link text-white small">Armed Forces</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>



        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social9.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="#!" class="stretched-link text-white small">Police</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>




        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social10.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="#!" class="stretched-link text-white small">Fire</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>




        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social11.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="#!" class="stretched-link text-white small">THW</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>



        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social12.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="#!" class="stretched-link text-white small">Paramedics</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>


        
      </div>
    </div>
    <!-- Story END -->

    <!-- Share feed START -->
    <livewire:publish-post />
    <!-- Share feed END -->

    <!-- Card feed item START -->
    <livewire:post-listing />
    

    
    <!-- Card feed item END -->
 
 

  </div>








@endsection