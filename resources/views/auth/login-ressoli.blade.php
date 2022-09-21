@extends('layouts.ressoli-theme')
@section('body-content')
<main>
  
    <!-- Container START -->
    <div class="container">
      <div class="row justify-content-center align-items-center vh-100 py-5">
        <!-- Main content START -->
        <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
          <!-- Sign in START -->
          <div class="card card-body text-center p-4 p-sm-5">
            <!-- Title -->
            <h1 class="mb-2">Sign in</h1>
            <p class="mb-0">Don't have an account?<a href="sign-up.html"> Click here to sign up</a></p>
            <!-- Form START -->
            <form class="mt-sm-4">
              <!-- Email -->
              <div class="mb-3 input-group-lg">
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <!-- New password -->
              <div class="mb-3 position-relative">
                <!-- Password -->
                <div class="input-group input-group-lg">
                  <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter new password">
                  <span class="input-group-text p-0">
                    <i class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                  </span>
                </div>
                <!-- Pswmeter -->
                <div id="pswmeter" class="mt-2"></div>
                <div class="d-flex mt-1">
                  <div id="pswmeter-message" class="rounded"></div>
                  <!-- Password message notification -->
                  <div class="ms-auto">
                    <i class="bi bi-info-circle ps-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Include at least one uppercase, one lowercase, one special character, one number and 8 characters long." data-bs-original-title="" title=""></i>
                  </div>
                </div>
              </div>
              <!-- Remember me -->
              <div class="mb-3 d-sm-flex justify-content-between">
                <div>
                  <input type="checkbox" class="form-check-input" id="rememberCheck">
                  <label class="form-check-label" for="rememberCheck">Remember me?</label>
                </div>
                <a href="forgot-password.html">Forgot password?</a>
              </div>
              <!-- Button -->
              <div class="d-grid"><button type="submit" class="btn btn-lg btn-primary">Login</button></div>
              <!-- Copyright -->
              <p class="mb-0 mt-3">©2022 <a target="_blank" href="https://www.webestica.com/">Webestica.</a> All rights reserved</p>
            </form>
            <!-- Form END -->
          </div>
          <!-- Sign in START -->
        </div>
      </div> <!-- Row END -->
    </div>
    <!-- Container END -->
  
  </main>
@endsection

@section('pageScripts')
    
@endsection