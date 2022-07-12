@extends('layouts.friendfinder-theme')
@section('body-content')
<header id="header" class="lazy-load">
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
		  <a class="navbar-brand" href="#"><img src="{{asset('assets/FriendFinder-Theme/images/logo.png')}}" alt="logo" /></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right main-menu">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="{{asset('assets/FriendFinder-Theme/images/down-arrow.png')}}" alt="" /></span></a>
				<ul class="dropdown-menu newsfeed-home">
				  <li><a href="#">Landing Page 1</a></li>
				  <li><a href="#">Landing Page 2</a></li>
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
			  <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="{{asset('assets/FriendFinder-Theme/images/down-arrow.png')}}" alt="" /></span></a>
			  <ul class="dropdown-menu page-list">
				<li><a href="#">Landing Page 1</a></li>
				<li><a href="#">Landing Page 2</a></li>
				<li><a href="#">Newsfeed</a></li>
				<li><a href="#">Poeple Nearly</a></li>
				<li><a href="#">My friends</a></li>
				<li><a href="#">Chatroom</a></li>
				<li><a href="#">Images</a></li>
				<li><a href="#">Videos</a></li>
				<li><a href="#">Timeline</a></li>
				<li><a href="#">Timeline About</a></li>
				<li><a href="#">Timeline Album</a></li>
				<li><a href="#">Timeline Friends</a></li>
				<li><a href="#">Edit Profile</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">FAQ Page</a></li>
				<li><a href="#">404 Not Found</a></li>
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
  <!--Header End-->

  <!-- Top Banner
  ================================================= -->
	  <section id="banner">
		  <div class="container">

	  <!-- Sign Up Form
	  ================================================= -->
	  <div class="sign-up-form">
				  <a href="/" class="logo"><img src="{{asset('assets/FriendFinder-Theme/images/logo.png')}}" alt="Friend Finder"/></a>
				  <h2 class="text-white">Find My Friends</h2>
				  <div class="line-divider"></div>
				  <div class="form-wrapper">
					  <p class="signup-text">Sign in  now and meet awesome people around the world</p>
					  <form method="POST" action="{{ route('login') }}">
						@csrf
						  {{-- <fieldset class="form-group">
							  <input type="text" class="form-control" id="example-name" placeholder="Enter name">
						  </fieldset> --}}
						  <fieldset class="form-group">
							  <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
							  @error('email')
							  <div style="color: red;">
									  {{$message}}
							  </div>
							  @enderror
						  </fieldset>
						  <fieldset class="form-group">
							  <input type="password" class="form-control" name="password" placeholder="Enter a password" value="{{old('password')}}">
							  @error('password')
							  <div style="color: red;">
									  {{$message}}
							  </div>
							  @enderror
							</fieldset>
							<button class="btn-secondary" type="submit">Sign In</button>
						</form>
						{{-- <form action="{{route('logout')}}" method="post">
						@csrf
						<button type="submit">Log out</button>
						</form> --}}
						<span>@if (Auth::check())
							LOged IN
						@endif</span>
					  {{-- <p>By signning up you agree to the terms</p> --}}

				  </div>
				  <p><a href="{{ route('password.request') }}">Forgot Password?</a></p>
				  <p><a href="{{route('register.ff')}}">Don't have a user account?Register Here</a></p>
				  <a href="{{route('register.shop')}}">Don't have a shop account?Register Here</a>
				  <img class="form-shadow" src="{{asset('assets/FriendFinder-Theme/images/bottom-shadow.png')}}" alt="" />
			  </div><!-- Sign Up Form End -->

	  <svg class="arrows hidden-xs hidden-sm">
		<path class="a1" d="M0 0 L30 32 L60 0"></path>
		<path class="a2" d="M0 20 L30 52 L60 20"></path>
		<path class="a3" d="M0 40 L30 72 L60 40"></path>
	  </svg>
		  </div>
	  </section>

  <!-- Features Section
  ================================================= -->
	  <section id="features">
		  <div class="container wrapper">
			  <h1 class="section-title slideDown">social herd</h1>
			  <div class="row slideUp">
				  <div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
					  <div class="feature-icon"><i class="icon ion-person-add"></i></div>
					  <h3>Make Friends</h3>
				  </div>
				  <div class="feature-item col-md-2 col-sm-6 col-xs-6">
					  <div class="feature-icon"><i class="icon ion-images"></i></div>
					  <h3>Publish Posts</h3>
				  </div>
				  <div class="feature-item col-md-2 col-sm-6 col-xs-6">
					  <div class="feature-icon"><i class="icon ion-chatbox-working"></i></div>
					  <h3>Private Chats</h3>
				  </div>
				  <div class="feature-item col-md-2 col-sm-6 col-xs-6">
					  <div class="feature-icon"><i class="icon ion-compose"></i></div>
					  <h3>Create Polls</h3>
				  </div>
			  </div>
			  <h2 class="sub-title">find awesome people like you</h2>
			  <div id="incremental-counter" data-value="101242"></div>
			  <p>People Already Signed Up</p>
			  <img src="{{asset('assets/FriendFinder-Theme/images/face-map.png')}}" alt="" class="img-responsive face-map slideUp hidden-sm hidden-xs" />
		  </div>

	  </section>

  <!-- Download Section
  ================================================= -->
	  <section id="app-download">
		  <div class="container wrapper">
			  <h1 class="section-title slideDown">download</h1>
			  <ul class="app-btn list-inline slideUp">
				  <li><button class="btn-secondary"><img src="{{asset('assets/FriendFinder-Theme/images/app-store.png')}}" alt="App Store" /></button></li>
				  <li><button class="btn-secondary"><img src="{{asset('assets/FriendFinder-Theme/images/google-play.png')}}" alt="Google Play" /></button></li>
			  </ul>
			  <h2 class="sub-title">stay connected anytime, anywhere</h2>
			  <img src="{{asset('assets/FriendFinder-Theme/images/iPhone.png')}}" alt="iPhone" class="img-responsive" />
		  </div>
	  </section>

  <!-- Image Divider
  ================================================= -->
  <div class="img-divider hidden-sm hidden-xs"></div>

  <!-- Facts Section
  ================================================= -->
	  <section id="site-facts">
		  <div class="container wrapper">
			  <div class="circle">
				  <ul class="facts-list">
					  <li>
						  <div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
						  <h3 class="text-white">1,01,242</h3>
						  <p>People registered</p>
					  </li>
					  <li>
						  <div class="fact-icon"><i class="icon ion-images"></i></div>
						  <h3 class="text-white">21,01,242</h3>
						  <p>Posts published</p>
					  </li>
					  <li>
						  <div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
						  <h3 class="text-white">41,242</h3>
						  <p>People online</p>
					  </li>
				  </ul>
			  </div>
		  </div>
	  </section>

  <!-- Live Feed Section
  ================================================= -->
	  <section id="live-feed">
		  <div class="container wrapper">
			  <h1 class="section-title slideDown">live feed</h1>
			  <ul class="online-users list-inline slideUp">
				  <li><a href="#" title="Alexis Clark"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-5.jpg')}}" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
		<li><a href="#" title="James Carter"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-6.jpg')}}" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
		<li><a href="#" title="Robert Cook"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-7.jpg')}}" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
		
			  </ul>
			  <h2 class="sub-title">see what’s happening now</h2>
			  <div class="row">
				  <div class="col-md-4 col-sm-6 col-md-offset-2">
					  <div class="feed-item">
						  <img src="{{asset('assets/FriendFinder-Theme/images/users/user-1.jpg')}}" alt="user" class="img-responsive profile-photo-sm" />
						  <div class="live-activity">
							  <p><a href="#" class="profile-link">Sarah</a> just posted a photo from Moscow</p>
							  <p class="text-muted">20 Secs ago</p>
						  </div>
					  </div>
					  <div class="feed-item">
						  <img src="{{asset('assets/FriendFinder-Theme/images/users/user-4.jpg')}}" alt="user" class="img-responsive profile-photo-sm" />
						  <div class="live-activity">
							  <p><a href="#" class="profile-link">John</a> Published a post from Sydney</p>
							  <p class="text-muted">1 min ago</p>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-4 col-sm-6">
					  <div class="feed-item">
						  <img src="{{asset('assets/FriendFinder-Theme/images/users/user-17.jpg')}}" alt="user" class="img-responsive profile-photo-sm" />
						  <div class="live-activity">
							  <p><a href="#" class="profile-link">Nora</a> Shared an article from Ohio</p>
							  <p class="text-muted">22 mins ago</p>
						  </div>
					  </div>
					  <div class="feed-item">
						  <img src="{{asset('assets/FriendFinder-Theme/images/users/user-18.jpg')}}" alt="user" class="img-responsive profile-photo-sm" />
						  <div class="live-activity">
							  <p><a href="#" class="profile-link">Addison</a> Created a poll from Barcelona</p>
							  <p class="text-muted">23 mins ago</p>
						  </div>
					  </div>
					  
				  </div>
			  </div>
		  </div>
	  </section>

  <!-- Footer
  ================================================= -->
	  <footer id="footer">
	<div class="container">
		<div class="row">
		<div class="footer-wrapper">
		  <div class="col-md-3 col-sm-3">
			<a href="#"><img src="{{asset('assets/FriendFinder-Theme/images/logo-black.png')}}" alt="" class="footer-logo" /></a>
			<ul class="list-inline social-icons">
				<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
				<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
				<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
				<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
				<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
			</ul>
		  </div>
		  <div class="col-md-2 col-sm-2">
			<h5>For individuals</h5>
			<ul class="footer-links">
			  <li><a href="#">Signup</a></li>
			  <li><a href="#">login</a></li>
			  <li><a href="#">Explore</a></li>
			  <li><a href="#">Finder app</a></li>
			  <li><a href="#">Features</a></li>
			  <li><a href="#">Language settings</a></li>
			</ul>
		  </div>
		  <div class="col-md-2 col-sm-2">
			<h5>For businesses</h5>
			<ul class="footer-links">
			  <li><a href="#">Business signup</a></li>
			  <li><a href="#">Business login</a></li>
			  <li><a href="#">Benefits</a></li>
			  <li><a href="#">Resources</a></li>
			  <li><a href="#">Advertise</a></li>
			  <li><a href="#">Setup</a></li>
			</ul>
		  </div>
		  <div class="col-md-2 col-sm-2">
			<h5>About</h5>
			<ul class="footer-links">
			  <li><a href="#">About us</a></li>
			  <li><a href="#">Contact us</a></li>
			  <li><a href="#">Privacy Policy</a></li>
			  <li><a href="#">Terms</a></li>
			  <li><a href="#">Help</a></li>
			</ul>
		  </div>
		  <div class="col-md-3 col-sm-3">
			<h5>Contact Us</h5>
			<ul class="contact">
			  <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
			  <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
			  <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
			</ul>
		  </div>
		</div>
		</div>
	</div>
	<div class="copyright">
	  <p>copyright @thunder-team 2016. All rights reserved</p>
	</div>
	  </footer>

  <!--preloader-->
  <div id="spinner-wrapper">
	<div class="spinner"></div>
  </div>
@endsection