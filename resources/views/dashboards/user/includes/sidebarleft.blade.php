<div class="offcanvas-body d-block px-2 px-lg-0">
    <!-- Card START -->
    <div class="card overflow-hidden">
      <!-- Cover image -->
      <div class="h-50px" style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
        <!-- Card body START -->
        <div class="card-body pt-0">
          <div class="text-center">
          <!-- Avatar -->
          <div class="avatar avatar-lg mt-n5 mb-3">
            <a href="#!"><img class="avatar-img rounded border border-white border-3" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""></a>
          </div>
          <!-- Info -->
          <h5 class="mb-0"> <a href="#!">{{Auth::user()->firstname.' '.Auth::user()->lastname}} </a> </h5>
          {{Auth::user()->printOptions()??''}}
          <p class="mt-3">{{old('about_me')??Auth::user()->about_me}}</p>

          <!-- User stat START -->
          <div class="hstack gap-2 gap-xl-3 justify-content-center">
            <!-- User stat item -->
            <div>
              <h6 class="mb-0">256</h6>
              <small>Post</small>
            </div>
            <!-- Divider -->
            <div class="vr"></div>
            <!-- User stat item -->
            <div>
              <h6 class="mb-0">2.5K</h6>
              <small>Followers</small>
            </div>
            <!-- Divider -->
            <div class="vr"></div>
            <!-- User stat item -->
            <div>
              <h6 class="mb-0">365</h6>
              <small>Following</small>
            </div>
          </div>
          <!-- User stat END -->
        </div>

        <!-- Divider -->
        <hr>

        <!-- Side Nav START -->
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}"> <span class="fa fa-dashboard me-2 h-20px fa-fw"></span> <span>Dashboard </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard.people-nearby')}}"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon001.png')}}" alt=""><span>People Nearby </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard.groups')}}"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon002.png')}}" alt=""><span>Groups </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route(config('chatify.routes.prefix'))}}"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon004.png')}}" alt=""><span>Messages </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard.users.page')}}"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon003.png')}}" alt=""><span>Users </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard.voucher.page')}}"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon005.png')}}" alt=""><span>Vouchers </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard.saving.page')}}"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon006.png')}}" alt=""><span>Savings </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.profile.basic.show')}}"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon007.png')}}" alt=""><span>Settings </span></a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="{{route('user.support.page')}}">
              <i class="fa-fw bi bi-life-preserver me-2"></i>Support
            </a> 
          </li>
        </ul>
        <!-- Side Nav END -->
      </div>
      <!-- Card body END -->
      <!-- Card footer -->
      <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="{{route('user.profile.basic.show')}}">View Profile </a>
      </div>
    </div>
    <!-- Card END -->

    <!-- Helper link START -->
    <ul class="nav small mt-4 justify-content-center lh-1">
      <li class="nav-item">
        <a class="nav-link" href="my-profile-about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="settings.html">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://support.webestica.com/login">Support </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="docs/index.html">Docs </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="help.html">Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="privacy-and-terms.html">Privacy & terms</a>
      </li>
    </ul>
    <!-- Helper link END -->
    <!-- Copyright -->
    <p class="small text-center mt-1">©2022 <a class="text-body" target="_blank" href="https://www.webestica.com/"> Webestica </a></p>
  </div>