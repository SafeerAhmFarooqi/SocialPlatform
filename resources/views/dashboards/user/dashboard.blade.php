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
    <div class="card card-body">
      <div class="d-flex mb-3">
        <!-- Avatar -->
        <div class="avatar avatar-xs me-2">
          <a href="#"> <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""> </a>
        </div>
        <!-- Post input -->
        <form class="w-100">
          <textarea class="form-control pe-4 border-0" rows="2" data-autoresize placeholder="Share your thoughts..."></textarea>
        </form>
      </div>
      <!-- Share feed toolbar START -->
      <ul class="nav nav-pills nav-stack small fw-normal">
        <li class="nav-item">
          <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal" data-bs-target="#feedActionPhoto"> <i class="bi bi-image-fill text-success pe-2"></i>Photo</a>
        </li>
         
      </ul>
      <!-- Share feed toolbar END -->
    </div>
    <!-- Share feed END -->

    <!-- Card feed item START -->
    <div class="card">
      <!-- Card header START -->
      <div class="card-header border-0 pb-0">
        <div class="d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <!-- Avatar -->
            <div class="avatar avatar-story me-2">
              <a href="#!"> <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""> </a>
            </div>
            <!-- Info -->
            <div>
              <div class="nav nav-divider">
                <h6 class="nav-item card-title mb-0"> <a href="#!"> {{Auth::user()->firstname.' '.Auth::user()->lastname}}</a></h6>
                <span class="nav-item small"> 2hr</span>
              </div>
              <p class="mb-0 small">Police</p>
            </div>
          </div>
          <!-- Card feed action dropdown START -->
          <div class="dropdown">
            <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-three-dots"></i>
            </a>
            <!-- Card feed action dropdown menu -->
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction"> 
              <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Delete </a></li> 
            </ul>
          </div>
          <!-- Card feed action dropdown END -->
        </div>
      </div>
      <!-- Card header END -->
      <!-- Card body START -->
      <div class="card-body">
        <p>I'm thrilled to share that I've completed a graduate certificate course in project management with the president's honor roll.</p>
        <!-- Card img -->
        <img class="card-img" src="{{asset('assets/ressoli-theme/assets/images/bg/03.jpg')}}" alt="Post">
        <!-- Feed react START -->
        <ul class="nav nav-stack py-3 small">
           
          <li class="nav-item">
            <a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
          </li>
          <!-- Card share action START -->
           
          <!-- Card share action END -->
        </ul>
        <!-- Feed react END -->

        <!-- Add comment -->
        <div class="d-flex mb-3">
          <!-- Avatar -->
          <div class="avatar avatar-xs me-2">
            <a href="#!"> <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""> </a>
          </div>
          <!-- Comment box  -->
          <form class="w-100">
            <textarea data-autoresize class="form-control pe-4 bg-light" rows="1" placeholder="Add a comment..."></textarea>
          </form>
        </div>
        <!-- Comment wrap START -->
        <ul class="comment-wrap list-unstyled">
          <!-- Comment item START -->
          <li class="comment-item">
            <div class="d-flex position-relative">
              <!-- Avatar -->
              <div class="avatar avatar-xs">
                <a href="#!"><img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""></a>
              </div>
              <div class="ms-2">
                <!-- Comment by -->
                <div class="bg-light rounded-start-top-0 p-3 rounded">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
                    <small class="ms-2">5hr</small>
                  </div>
                  <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                </div>
                <!-- Comment react -->
               
              </div>
            </div>
           
           <br>
            <!-- Comment item nested END -->
          </li>
          <!-- Comment item END -->
          <!-- Comment item START -->
          <li class="comment-item">
            <div class="d-flex">
              <!-- Avatar -->
              <div class="avatar avatar-xs">
              <a href="#!"><img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""></a>
              </div>
              <!-- Comment by -->
              <div class="ms-2">
                <div class="bg-light p-3 rounded">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
                    <small class="ms-2">4min</small>
                  </div>
                  <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                </div>
                
              </div>
            </div>
          </li>
          <!-- Comment item END -->
        </ul>
        <!-- Comment wrap END -->
      </div>
      <!-- Card body END -->
      <!-- Card footer START -->
      
      <!-- Card footer END -->
    </div>
    <!-- Card feed item END -->
 
 

  </div>


  <div class="modal fade" id="feedActionPhoto" tabindex="-1" aria-labelledby="feedActionPhotoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal feed header START -->
      <div class="modal-header">
        <h5 class="modal-title" id="feedActionPhotoLabel">Add post photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal feed header END -->

        <!-- Modal feed body START -->
        <div class="modal-body">
        <!-- Add Feed -->
        <div class="d-flex mb-3">
          <!-- Avatar -->
          <div class="avatar avatar-xs me-2">
            <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt="">
          </div>
          <!-- Feed box  -->
          <form class="w-100">
            <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
          </form>
        </div>

        <!-- Dropzone photo START -->
        <div>
          <label class="form-label">Upload attachment</label>
          <div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
            <div class="dz-message">
              <i class="bi bi-images display-3"></i>
              <p>Drag here or click to upload photo.</p>
            </div>
          </div>
        </div>
        <!-- Dropzone photo END -->

        </div>
        <!-- Modal feed body END -->

        <!-- Modal feed footer -->
        <div class="modal-footer ">
          <!-- Button -->
            <button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success-soft">Post</button>
        </div>
        <!-- Modal feed footer -->
    </div>
  </div>
</div>





@endsection