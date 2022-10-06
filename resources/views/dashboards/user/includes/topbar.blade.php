<!-- =======================
Header START -->
<header class="navbar-light fixed-top header-static bg-mode">

  <!-- Logo Nav START -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo START -->
      <a class="navbar-brand" href="{{route('dashboard')}}">
        <img class="light-mode-item navbar-brand-item" src="{{asset('assets/ressoli-theme/assets/images/social7.png')}}" alt="logo"> 
      </a>
      <!-- Logo END -->

      <!-- Responsive navbar toggler -->
      <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-animation">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </button>

      <!-- Main navbar START -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Nav Search START -->
        <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
          <div class="nav-item w-100">
            <form class="rounded position-relative">
              <input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
              <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
            </form>
          </div>
        </div>
        <!-- Nav Search END -->

         
      </div>
      <!-- Main navbar END -->

      <!-- Nav right START -->
      <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
        <li class="nav-item ms-2">
          <a class="nav-link icon-md btn btn-light p-0" href="messaging.html">
            <i class="bi bi-chat-left-text-fill fs-6"> </i>
          </a>
        </li>
        <li class="nav-item ms-2">
          <a class="nav-link icon-md btn btn-light p-0" href="settings.html">
            <i class="bi bi-gear-fill fs-6"> </i>
          </a>
        </li>
        <li class="nav-item dropdown ms-2">
          <a class="nav-link icon-md btn btn-light p-0" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
            <span class="badge-notif animation-blink"></span>
            <i class="bi bi-bell-fill fs-6"> </i>
          </a>
          <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0" aria-labelledby="notifDropdown">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                <a class="small" href="#">Clear all</a>
              </div>
              <div class="card-body p-0">
                <ul class="list-group list-group-flush list-unstyled p-2">
                  <!-- Notif item -->
                  <li>
                    <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                      <div class="avatar text-center d-none d-sm-inline-block">
                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
                      </div>
                      <div class="ms-sm-3">
                        <div class=" d-flex">
                        <p class="small mb-2"><b>Judy Nguyen</b> send you message</p>
                        <p class="small ms-3 text-nowrap">Just now</p>
                      </div>
                      <div class="d-flex">
                        <button class="btn btn-sm py-1 btn-primary me-2">Inbox </button> 
                      </div>
                    </div>
                  </div>
                  </li>
                  <!-- Notif item -->
                   
                  <!-- Notif item -->
                  <li>
                    <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                      <div class="avatar text-center d-none d-sm-inline-block">
                        <div class="avatar-img rounded-circle bg-success"><span class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span></div>
                      </div>
                      <div class="ms-sm-3">
                        <div class="d-flex">
                          <p class="small mb-2">Webestica has 15 like Comment on your post</p>
                          <p class="small ms-3">1hr</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- Notif item -->
                  
                </ul>
              </div>
              <div class="card-footer text-center">
                <a href="#" class="btn btn-sm btn-primary-soft">See all incoming activity</a>
              </div>
            </div>
          </div>
        </li>
        <!-- Notification dropdown END -->

        <li class="nav-item ms-2 dropdown">
          <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="avatar-img rounded-2" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt="">
          </a>
          <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3" aria-labelledby="profileDropdown">
            <!-- Profile info -->
            <li class="px-3">
              <div class="d-flex align-items-center position-relative">
                <!-- Avatar -->
                <div class="avatar me-3">
                  <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt="avatar">
                </div>
                <div>
                  <a class="h6 stretched-link" href="#">{{Auth::user()->firstname.' '.Auth::user()->lastname}}</a>
                  <p class="small m-0">{{Auth::user()->email}}</p>
                </div>
              </div>
             </li>
            <!-- Links -->
            <li><a class="dropdown-item" href="{{route('user.profile.basic.show')}}"><i class="bi bi-gear fa-fw me-2"></i>Settings </a></li>
            <li> 
              <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                <i class="fa-fw bi bi-life-preserver me-2"></i>Support
              </a> 
            </li>
            
            <li class="dropdown-divider"></li>
           
            <li><a href="#" class="dropdown-item bg-danger-soft-hover"> 
                  <form action="{{route('logout')}}" method="post" style="display: inline; padding: 0% 0%;">
                  @csrf
                  <button type="submit" style="padding: 0% 0%;background: none;border: none;"><i class="bi bi-power fa-fw me-2"></i> Log Out</button>
                  </form>   
                </a></li>


            
          </ul>
        </li>
        <!-- Profile START -->
        
      </ul>
      <!-- Nav right END -->
    </div>
  </nav>
  <!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->