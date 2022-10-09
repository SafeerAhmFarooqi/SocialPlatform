@extends('layouts.ressoli-theme')
@section('body-content')

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Social - Network, Community a</title>

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
          <h1 class="mb-2"><img src="{{asset('assets/ressoli-theme/assets/password.png')}}" style="width:50%"></h1>
          <p class="mb-0">Password Reset link send to your email address please click and reset your new password

</a></p>
           <br><Br>
                   <form method="POST" action="{{ route('password.email') }}">
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
						  </fieldset><br> 
							<button  class="btn btn-lg btn-warning"  type="submit">Email Password Reset Link</button>
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