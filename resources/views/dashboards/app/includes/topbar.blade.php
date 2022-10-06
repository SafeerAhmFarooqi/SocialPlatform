<nav class="navbar navbar-expand-lg">
    <div class="container">
 

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

        <ul class="navbar-nav navbar-nav-scroll ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="">AGB</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('register.ff')}}">Register</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>

        </ul>
      </div>
      <!-- Main navbar END -->

      <!-- Nav right START -->
      <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
        <!-- Notification dropdown END -->
        <li class="nav-item ms-2 dropdown">
          <a class="nav-link btn icon-md p-0" href="{{route('register.shop')}}"  >
            <img class="avatar-img rounded-2" src="https://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/shop-icon.png" alt="">
          </a>
          
        </li>
        <!-- Profile START -->
        
      </ul>
      <!-- Nav right END -->
    </div>
  </nav>