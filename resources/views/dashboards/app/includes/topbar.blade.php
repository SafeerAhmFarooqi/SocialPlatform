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
            <a class="nav-link" href="{{route('app.agb')}}">AGB</a>
          </li>
          @if (Auth::check())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{Auth::user()->firstname??'Options'}}</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item">{{Auth::user()->email??''}}</a></li>
              <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="{{route('logout')}}" method="post">
              @csrf
              <li><a class="dropdown-item" href="#"  onclick="event.preventDefault();
                this.closest('form').submit();">Sign Out</a></li>
            </form>
             
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('register.ff')}}">Register</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>    
          @endif
          

        </ul>
      </div>
      <!-- Main navbar END -->

      <!-- Nav right START -->
     
      <!-- Nav right END -->
    </div>
  </nav>