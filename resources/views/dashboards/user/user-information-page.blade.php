@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-8 col-lg-6 vstack gap-4">
  <div class="about-profile">



    <div class="card">
          <!-- Cover image -->
          <div class="h-200px rounded-top" style="background-image:url({{asset('assets/ressoli-theme/assets/profilecoverlock.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
            <!-- Card body START -->
            <div class="card-body py-0">
              <div class="d-sm-flex align-items-start text-center text-sm-start">
                <div>
                  <!-- Avatar -->
                  <div class="avatar avatar-xxl mt-n5 mb-3">
                    <img class="avatar-img rounded-circle border border-white border-3" src="{{$user->profile_pic_path?asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="">
                  </div>
                </div>
                <div class="ms-sm-4 mt-sm-3">
                  <!-- Info -->
                  <h1 class="mb-0 h5">{{$user->firstname.' '.$user->lastname}}
                   <!-- <i class="bi bi-patch-check-fill text-success small"></i> -->
                 </h1>
                  <p>Arm Forces</p>
                </div>
                <!-- Button -->
                <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                  <button class="btn btn-primary-soft me-2" type="button"> <i class="bi bi-chat pe-1"></i>  </button>
                  
                </div>
              </div>
              <!-- List profile -->
              <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                 @if (isset($user->accountSetting->user_phone)?($user->accountSetting->user_phone) : false)
                <li class="list-inline-item"><i class="bi bi-phone me-1"></i>{{$user->phone}}</li>
                 @endif

@if (isset($user->accountSetting->user_dob)?($user->accountSetting->user_dob) : false)

                 <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> {{$user->user_dob}}</li>
                  @endif
              </ul>
            </div>
            <!-- Card body END -->
   

 @if (isset($user->accountSetting->user_about)?($user->accountSetting->user_about) : false)
   
          <p style="padding:30px"><span class="text-grey">{{$user->about_me}}</span></p>
     
      @endif


          </div>






 
 
  </div>
 </div>
@endsection

@section('pageStyles')
<style type="text/css">
  .custom-search {
  position: relative;
  
}
.custom-search-input {
  width: 100%;
  border: 1px solid #ccc;
 
  padding: 10px 100px 10px 20px; 
  line-height: 1;
  box-sizing: border-box;
  outline: none;
}
.custom-search-botton {
  position: absolute;
  right: 3px; 
  top: 3px;
  bottom: 3px;
  border: 0;
  background: #0f74f6;
  color: #fff;
  outline: none;
  margin: 0;
  padding: 0 10px;
  border-radius: 100px;
  z-index: 2;
}
.p-3 {
    padding: 5px 15px 0px 15px !important;
}
</style>
@endsection