@extends('dashboards.user.dashboard-layout-setting')
@section('page-content')
<div class="col-md-7">

    <!-- Basic Information
    ================================================= -->
    <div class="edit-profile-container">
        <div class="block-title">
          <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
          <div class="line"></div>
          <p>Send a link to your email to reset password</p>
          <div class="line"></div>
        </div>
        <div class="edit-block">
          <div class="col-sm-6">
            <a href="{{ route('user.profile.password.change') }}" class="btn btn-primary">Reset Password</a>
          </div>
        </div>
      </div>
  </div>
@endsection
@section('pageScripts')

@endsection