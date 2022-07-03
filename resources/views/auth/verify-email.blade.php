{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout> --}}



@extends('layouts.friendfinder-theme')
@section('body-content')
	  <section id="banner">
		  <div class="container">
	  <div class="sign-up-form">
				  <a href="#" class="logo"><img src="{{asset('assets/FriendFinder-Theme/images/logo.png')}}" alt="Friend Finder"/></a>
				  <h2 class="text-white">Verify Email</h2>
				  <div class="line-divider"></div>
				  <div class="form-wrapper">
					  <p class="signup-text">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
					  <form method="POST" action="{{ route('verification.send') }}">
						@csrf
						
							<button class="btn-secondary" type="submit">Resend Verification Email</button>
						</form>
                       
						
					  {{-- <p>By signning up you agree to the terms</p> --}}

				  </div>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                        <button class="btn-secondary" type="submit">Log Out</button>
                    </form>
                    @if (session('status') == 'verification-link-sent')
                    <div style="font-size: 150%;">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
				  
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
