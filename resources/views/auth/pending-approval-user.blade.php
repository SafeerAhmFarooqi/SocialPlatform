@extends('layouts.friendfinder-theme')
@section('body-content')
	  <section id="banner">
		  <div class="container">
	  <div class="sign-up-form">
				  <a href="#" class="logo"><img src="{{asset('assets/FriendFinder-Theme/images/logo.png')}}" alt="Friend Finder"/></a>
				  <h2 class="text-white">Verify Email</h2>
				  <div class="line-divider"></div>
				  <div class="form-wrapper">
					  <p class="signup-text">Thanks for signing up! Before getting started, your user account must be approved from Administrator. Please wait until your account is approved.</p>
					 
                       
						
					  {{-- <p>By signning up you agree to the terms</p> --}}

				  </div>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                        <button class="btn-secondary" type="submit">Log Out</button>
                    </form>
                    
				  
				  <img class="form-shadow" src="{{asset('assets/FriendFinder-Theme/images/bottom-shadow.png')}}" alt="" />
			  </div><!-- Sign Up Form End -->

	  <svg class="arrows hidden-xs hidden-sm">
		<path class="a1" d="M0 0 L30 32 L60 0"></path>
		<path class="a2" d="M0 20 L30 52 L60 20"></path>
		<path class="a3" d="M0 40 L30 72 L60 40"></path>
	  </svg>
		  </div>
	  </section>

 
	 


  <!--preloader-->
  <div id="spinner-wrapper">
	<div class="spinner"></div>
  </div>
@endsection