{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.friendfinder-theme')
@section('body-content')
	  <section id="banner">
		  <div class="container">
	  <div class="sign-up-form">
				  <a href="/" class="logo"><img src="{{asset('assets/FriendFinder-Theme/images/logo.png')}}" alt="Friend Finder"/></a>
				  <h2 class="text-white">Reset Password</h2>
				  <div class="line-divider"></div>
				  <div class="form-wrapper">
					  {{-- <p class="signup-text">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p> --}}
                      <form method="POST" action="{{ route('password.update') }}">
						@csrf

                        <!-- Password Reset Token -->
                          <input type="hidden" name="token" value="{{ $request->route('token') }}">
						  {{-- <fieldset class="form-group">
							  <input type="text" class="form-control" id="example-name" placeholder="Enter name">
						  </fieldset> --}}
						  <fieldset class="form-group">
							  <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{old('email', $request->email)}}">
							  @error('email')
							  <div style="color: red;">
									  {{$message}}
							  </div>
							  @enderror
						  </fieldset>
                          <fieldset class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter a password">
                            @error('password')
                            <div style="color: red;">
                                    {{$message}}
                            </div>
                            @enderror
                          </fieldset>
                          <fieldset class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                            @error('password')
                            <div style="color: red;">
                                    {{$message}}
                            </div>
                            @enderror
                          </fieldset>
							<button class="btn-secondary" type="submit">Reset Password</button>
						</form>
                       
						
					  {{-- <p>By signning up you agree to the terms</p> --}}

				  </div>
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
