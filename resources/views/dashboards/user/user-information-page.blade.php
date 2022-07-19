@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-7" style="margin-top: 10%;">
    <div class="about-profile">
        <div class="about-content-block">
          <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>
          <div class="row">
            <div class="col-md-3">
              <div class="profile-info">
                <p class="text-muted">Profile Image</p>
                <label for="profile_pic">
                  <img src="{{$user->profile_pic_path?asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="" class="img-responsive profile-photo" id="output"/>
                </label>
               
              </div>
              
            </div>
            
          </div>
          <p></p>
        </div>
        <div class="about-content-block">
          <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Name</h4>
          <div class="organization">
            <div class="work-info">
              <p><span class="text-grey">{{$user->firstname.' '.$user->lastname}}</span></p>
            </div>
          </div>
          @if (isset($user->accountSetting->user_dob)?($user->accountSetting->user_dob) : false)
          <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Date of Birth</h4>
          <div class="organization">
            <div class="work-info">
              <p><span class="text-grey">{{$user->dob->format('F d, Y')}}</span></p>
            </div>
          </div>
          @endif
          @if (isset($user->accountSetting->user_address)?($user->accountSetting->user_address) : false)
          <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Address</h4>
          <div class="organization">
            <div class="work-info">
              <p><span class="text-grey">{{$user->user_address}}</span></p>
            </div>
          </div>
          @endif
          @if (isset($user->accountSetting->user_phone)?($user->accountSetting->user_phone) : false)
          <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Phone</h4>
          <div class="organization">
            <div class="work-info">
              <p><span class="text-grey">{{$user->phone}}</span></p>
            </div>
          </div>
          @endif
          @if (isset($user->accountSetting->user_about)?($user->accountSetting->user_about) : false)
          <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>About User</h4>
          <div class="organization">
            <div class="work-info">
              <p><span class="text-grey">{{$user->about_me}}</span></p>
            </div>
          </div>
          @endif
        </div>
      </div>
</div>
@endsection