@extends('layouts.ressoli-theme')
@section('body-content')

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Social - Network, Community and Event Theme</title>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Webestica.com">
  <meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">

  <!-- Plugins CSS -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

  <!-- Theme CSS -->
  <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
   
</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
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
          <p class="mb-0">Don't have an account?<a href="{{ url('register-ff') }}"> Click here to sign up</a></p>
          <!-- Form START --> 
              <form class="mt-sm-4 form w-100" method="POST" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login') }}">
            @csrf
           
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <!-- Email -->
            <div class="mb-3 input-group-lg">
              <input type="email" class="form-control" placeholder="Enter email" name="email">
               @error('email')
                <div class="alert alert-danger">
                        {{$message}}
                </div>
                @enderror

            </div>
            <!-- New password -->
            <div class="mb-3 position-relative">
              <!-- Password -->
              <div class="input-group input-group-lg">
                <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter password" name="password">
                 @error('password')
                <div class="alert alert-danger">
                        {{$message}}
                </div>
                @enderror

                 
              </div>
              <!-- Pswmeter -->
             
            </div>
            <!-- Remember me -->
            <div class="mb-3 d-sm-flex justify-content-between">
              <div>
                <input type="checkbox" class="form-check-input" id="rememberCheck">
                <label class="form-check-label" for="rememberCheck">Remember me?</label>
              </div>
              <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>
            <!-- Button -->
            <div class="d-grid"><button type="submit" class="btn btn-lg btn-primary">Login</button></div>
            <!-- Copyright -->
            
          </form>
          <!-- Form END -->
        </div>
        <!-- Sign in START -->
      </div>
    </div> <!-- Row END -->
  </div>
  <!-- Container END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
 

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/pswmeter/pswmeter.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
  
</body>
  </html>
 
@endsection

@section('pageScripts')
    
@endsection