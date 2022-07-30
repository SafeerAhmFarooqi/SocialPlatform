<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/dashboard"><img src="{{asset('assets/FriendFinder-Theme/images/logo.png')}}" alt="logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right main-menu">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="{{asset('assets/FriendFinder-Theme/images/down-arrow.png')}}" alt="" /></span></a>
                <ul class="dropdown-menu newsfeed-home">
                  <li><a href="#">User</a></li>
                  @role('shop')
                  <li><a href="#">Shop</a></li>
                  @endrole
                  <li><a href="/">Landing Page</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="{{asset('assets/FriendFinder-Theme/images/down-arrow.png')}}" alt="" /></span></a>
                <ul class="dropdown-menu newsfeed-home">
                  <li><a href="#">Newsfeed</a></li>
                  <li><a href="#">Poeple Nearly</a></li>
                  <li><a href="#">My friends</a></li>
                  <li><a href="#">Chatroom</a></li>
                  <li><a href="#">Images</a></li>
                  <li><a href="#">Videos</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="{{asset('assets/FriendFinder-Theme/images/down-arrow.png')}}" alt="" /></span></a>
              <ul class="dropdown-menu login">
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Timeline About</a></li>
                <li><a href="#">Timeline Album</a></li>
                <li><a href="#">Timeline Friends</a></li>
                <li><a href="#">Edit: Basic Info</a></li>
                <li><a href="#">Edit: Work</a></li>
                <li><a href="#">Edit: Interests</a></li>
                <li><a href="#">Account Settings</a></li>
                <li><a href="#">Change Password</a></li>
              </ul>
            </li>
         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span><img src="{{asset('assets/FriendFinder-Theme/images/down-arrow.png')}}" alt="" /></span></a>
              <ul class="dropdown-menu page-list">
                <li><a href="{{route('user.profile.basic.show')}}">My Profile</a></li>
                <li><a href="#"> 
                  <form action="{{route('logout')}}" method="post" style="display: inline; padding: 0% 0%;">
                  @csrf
                  <button type="submit" style="padding: 0% 0%;background: none;border: none;">Log Out</button>
                  </form>   
                </a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#">Contact</a></li>
          </ul>
          <form class="navbar-form navbar-right hidden-sm">
            <div class="form-group">
              <i class="icon ion-android-search"></i>
              <input type="text" class="form-control" placeholder="Search friends, photos, videos">
            </div>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header>