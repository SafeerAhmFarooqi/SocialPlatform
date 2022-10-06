@extends('layouts.ressoli-theme')
@section('body-content')
<header class="navbar-dark navbar-transparent header-static">

  <!-- Logo Nav START -->
 @include('dashboards.app.includes.topbar')
  <!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main> 

  <!-- Hero event START -->
  <section class="pt-5 pb-0 position-relative" style="background-image: url({{asset('assets/ressoli-theme/assets/images/bg/07.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: top center;">
  <div class="bg-overlay bg-dark opacity-8"></div>
    <!-- Container START -->
    <div class="container">
      <div class="pt-5">
        <div class="row position-relative">
          <div class="col-xl-8 col-lg-10 mx-auto pt-sm-5 text-center">
            <!-- Title -->
            <h1 class="text-white">
              <img src="{{asset('assets/ressoli-theme/assets/images/resolilogo1.png')}}">
            </h1>
              
          </div>
          <div class="mb-n5 mt-3 mt-lg-5">
            <div class="col-xl-9 col-lg-11 mx-auto">
              <!-- Category START -->
              <div class="d-md-flex gap-3 mt-5">
                <!-- Category item -->
                <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                  <img class="h-40px mb-3" src="{{asset('assets/ressoli-theme/assets/images/police.png')}}" alt="">
                  <h6>Arms Forces</h6>
                </a>
                <!-- Category item -->
                <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                  <img class="h-40px mb-3" src="{{asset('assets/ressoli-theme/assets/images/police.png')}}" alt="">
                  <h6>Police   </h6>
                </a>
                <!-- Category item -->
                <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                  <img class="h-40px mb-3" src="{{asset('assets/ressoli-theme/assets/images/police.png')}}" alt="">
                  <h6>Fire </h6>
                </a>
                <!-- Category item -->
                <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                  <img class="h-40px mb-3" src="{{asset('assets/ressoli-theme/assets/images/police.png')}}" alt="">
                  <h6>Paramedics</h6>
                </a>
                <!-- Category item -->
                <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                  <img class="h-40px mb-3" src="{{asset('assets/ressoli-theme/assets/images/police.png')}}" alt="">
                  <h6>THW</h6>
                </a>
              </div>
              <!-- Category END -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- Hero event END -->

<section class="py-4 py-sm-5" style="padding-top:180px !important">
    <div class="container">
      <div class="row justify-content-center">
        <!-- Title -->
        <div class="col-lg-12 text-center mb-4">
          <h2 class="h1">More than messaging</h2>
          <p>Express besides it present if at an opinion visitor. </p>
        </div>
      </div>
      <!-- Row START -->
      <div class="row g-4 g-lg-5">
        <!-- Feature START -->
        <div class="col-md-4 text-center">
          <img class="h-100px mb-4" src="{{asset('assets/ressoli-theme/assets/images/social1.png')}}" alt="">
          <h4>Unlimited Posts</h4>
          <p class="mb-0">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky.</p>
        </div>
        <!-- Feature END -->

        <!-- Feature START -->
        <div class="col-md-4 text-center">
          <img class="h-100px mb-4" src="{{asset('assets/ressoli-theme/assets/images/social2.png')}}" alt="">
          <h4>Make Groups</h4>
          <p class="mb-0">Handsome met debating sir dwelling age material. As style lived he worse dried. visitors subjects distance.</p>
        </div>
        <!-- Feature END -->

        <!-- Feature START -->
        <div class="col-md-4 text-center">
          <img class="h-100px mb-4" src="{{asset('assets/ressoli-theme/assets/images/social3.png')}}" alt="">
          <h4> Near Location</h4>
          <p class="mb-0">Yet uncommonly his ten who diminution astonished. Demesne new manners savings staying had. </p>
        </div>
        <!-- Feature END -->
      </div>
      <!-- Row START -->
    </div>
  </section>


   <section class="py-4 py-sm-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 ms-auto">
          <div class="row g-4 align-items-center">
            <div class="col-md-5 col-lg-5 position-relative">
              <!-- Image -->
              <img class="rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/social4.png')}}" alt="">
              <!-- Chat START -->
              <div class="position-absolute top-50 start-0 translate-middle d-none d-lg-block">
                <!-- Chat item -->
                <div class="bg-mode border p-3 rounded-3 rounded-start-top-0 d-flex align-items-center mb-3">
                  <!-- Avatar -->
                  <div class="avatar avatar-xs me-3">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="https://ressoli.asadsohail.com/assets/ressoli-theme/assets/images/avatar/12.jpg" alt=""> </a>
                  </div>
                  <!-- Comment box  -->
                  <div class="d-flex">
                    <h6 class="mb-0 ">Police Quick Response </h6>
                    <!-- <span class="ms-2">🎂</span> -->
                  </div>
                </div>

                <!-- Chat item -->
                <div class="bg-mode border p-3 rounded-3 rounded-start-top-0 d-flex align-items-center mb-3">
                  <!-- Avatar -->
                  <div class="avatar avatar-xs me-3">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="https://ressoli.asadsohail.com/assets/ressoli-theme/assets/images/avatar/10.jpg" alt=""> </a>
                  </div>
                <!-- Comment box  -->
                  <div class="d-flex">
                    <h6 class="mb-0 ">Emergency Fire support</h6>
                 <!--    <span class="ms-2">🤘</span> -->
                  </div>
                </div>

                <!-- Chat item -->
                <div class="bg-mode border p-3 rounded-3 rounded-start-top-0 d-flex align-items-center mb-3">
                  <!-- Avatar -->
                  <div class="avatar avatar-xs me-3">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="https://ressoli.asadsohail.com/assets/ressoli-theme/assets/images/avatar/09.jpg" alt=""> </a>
                  </div>
                  <!-- Comment box  -->
                    <div class="d-flex">
                      <h6 class="mb-0 ">THW Quick Response </h6>
                     <!--  <span class="ms-2">🎂</span> -->
                    </div>
                  </div>
               </div>
               <!-- Chat END -->
            </div>
            <div class="col-md-6">
              <div class="ms-4">
                <!-- Info -->
                <h2 class="h1">Get Discovered</h2>
                <p class="lead mb-4">Enjoy special interactive features such as Live Battles, Interactive Gifts, Happy Moments &amp; Exclusive Posts to help you rise the ranks and grow your audience!</p>
                <a class="btn btn-primary" href="#"> Let's start </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 
  <!-- Explore Groups START -->
  <section class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-3">
          <!-- Title -->
          <h4>  Groups </h4>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <!-- Card START -->
          <div class="card">
            <div class="h-80px rounded-top" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social4.jpg')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
              <!-- Card body START -->
              <div class="card-body text-center pt-0">
                <!-- Avatar -->
                <div class="avatar avatar-lg mt-n5 mb-3">
                  <a href="group-details.html"><img class="avatar-img rounded-circle border border-white border-3 bg-mode" src="{{asset('assets/ressoli-theme/assets/images/avatar/02.jpg')}}" alt=""></a>
                </div>
                <!-- Info -->
                <h5 class="mb-0"> <a href="group-details.html">All in the Mind</a> </h5>
                <small> <i class="bi bi-lock pe-1"></i> Private Group</small>
                <!-- Group stat START -->
                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                  <!-- Group stat item -->
                  <div>
                    <h6 class="mb-0">32k</h6>
                    <small>Members</small>
                  </div>
                  <!-- Divider -->
                  <div class="vr"></div>
                  <!-- Group stat item -->
                  <div>
                    <h6 class="mb-0">20</h6>
                    <small>Post per day</small>
                  </div>
                </div>
                <!-- Group stat END -->
                <!-- Avatar group START -->
                <ul class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/02.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/03.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/04.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/05.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <div class="avatar-img rounded-circle bg-primary"><span class="smaller text-white position-absolute top-50 start-50 translate-middle">+22</span></div>
                  </li>
                </ul>
                <!-- Avatar group END -->
            </div>
            <!-- Card body END -->
          </div>
          <!-- Card END -->
        </div>
        <div class="col-md-4">
          <!-- Card START -->
          <div class="card">
            <div class="h-80px rounded-top" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social4.jpg')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
              <!-- Card body START -->
              <div class="card-body text-center pt-0">
                <!-- Avatar -->
                <div class="avatar avatar-lg mt-n5 mb-3">
                  <a href="group-details.html"><img class="avatar-img rounded-circle border border-white border-3 bg-mode" src="{{asset('assets/ressoli-theme/assets/images/avatar/02.jpg')}}" alt=""></a>
                </div>
                <!-- Info -->
                <h5 class="mb-0"> <a href="group-details.html">All in the Mind</a> </h5>
                <small> <i class="bi bi-lock pe-1"></i> Private Group</small>
                <!-- Group stat START -->
                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                  <!-- Group stat item -->
                  <div>
                    <h6 class="mb-0">32k</h6>
                    <small>Members</small>
                  </div>
                  <!-- Divider -->
                  <div class="vr"></div>
                  <!-- Group stat item -->
                  <div>
                    <h6 class="mb-0">20</h6>
                    <small>Post per day</small>
                  </div>
                </div>
                <!-- Group stat END -->
                <!-- Avatar group START -->
                <ul class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/02.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/03.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/04.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/05.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <div class="avatar-img rounded-circle bg-primary"><span class="smaller text-white position-absolute top-50 start-50 translate-middle">+22</span></div>
                  </li>
                </ul>
                <!-- Avatar group END -->
            </div>
            <!-- Card body END -->
          </div>
          <!-- Card END -->
        </div>
        <div class="col-md-4">
          <!-- Card START -->
          <div class="card">
            <div class="h-80px rounded-top" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social4.jpg')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
              <!-- Card body START -->
              <div class="card-body text-center pt-0">
                <!-- Avatar -->
                <div class="avatar avatar-lg mt-n5 mb-3">
                  <a href="group-details.html"><img class="avatar-img rounded-circle border border-white border-3 bg-mode" src="{{asset('assets/ressoli-theme/assets/images/avatar/02.jpg')}}" alt=""></a>
                </div>
                <!-- Info -->
                <h5 class="mb-0"> <a href="group-details.html">All in the Mind</a> </h5>
                <small> <i class="bi bi-lock pe-1"></i> Private Group</small>
                <!-- Group stat START -->
                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                  <!-- Group stat item -->
                  <div>
                    <h6 class="mb-0">32k</h6>
                    <small>Members</small>
                  </div>
                  <!-- Divider -->
                  <div class="vr"></div>
                  <!-- Group stat item -->
                  <div>
                    <h6 class="mb-0">20</h6>
                    <small>Post per day</small>
                  </div>
                </div>
                <!-- Group stat END -->
                <!-- Avatar group START -->
                <ul class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/02.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/03.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/04.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="{{asset('assets/ressoli-theme/assets/images/avatar/05.jpg')}}" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <div class="avatar-img rounded-circle bg-primary"><span class="smaller text-white position-absolute top-50 start-50 translate-middle">+22</span></div>
                  </li>
                </ul>
                <!-- Avatar group END -->
            </div>
            <!-- Card body END -->
          </div>
          <!-- Card END -->
        </div>
        
      </div>
    </div>
  </section>
  <!-- Explore Groups END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Footer START -->
@include('dashboards.app.includes.footer')

<!-- Footer END -->

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
  
</body>
 
@endsection

@section('pageScripts')
    
@endsection