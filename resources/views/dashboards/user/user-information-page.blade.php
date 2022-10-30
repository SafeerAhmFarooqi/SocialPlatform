@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-8 col-lg-6 vstack gap-4">
  <div class="about-profile">



    <div class="card">
          <!-- Cover image -->
          <div class="h-200px rounded-top" style="background-image:url({{ $user->cover_image_path?($user->accountSetting->cover_image?asset('storage/'.Auth::user()->cover_image_path) :  asset('assets/ressoli-theme/assets/profilecoverlock.png')) : asset('assets/ressoli-theme/assets/profilecoverlock.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
            <!-- Card body START -->
            <div class="card-body py-0">
              <div class="d-sm-flex align-items-start text-center text-sm-start">
                <div>
                  <!-- Avatar -->
                  <div class="avatar avatar-xxl mt-n5 mb-3">
                    <img class="avatar-img rounded-circle border border-white border-3" src="{{ $user->profile_pic_path?($user->accountSetting->profile_image?asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="">
                    
                  </div>
                </div>
                <div class="ms-sm-4 mt-sm-3">
                  <!-- Info -->
                  <h1 class="mb-0 h5">{{$user->firstname.' '.$user->lastname}}
                   <!-- <i class="bi bi-patch-check-fill text-success small"></i> -->
                 </h1>
                  <p>{{$user->options??''}}</p>
                </div>
                <!-- Button -->
                <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                  <a href="javascript:;" onclick="myFunction({{$user->id}})" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Send message"> <i class="bi bi-chat pe-1"></i>  </a>
                  
                </div>
              </div>
              <!-- List profile -->
              <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                 @if (isset($user->accountSetting->user_phone)?($user->accountSetting->user_phone) : false)
                <li class="list-inline-item"><i class="bi bi-phone me-1"></i>{{$user->phone}}</li>
                 @endif

@if (isset($user->accountSetting->user_dob)?($user->accountSetting->user_dob) : false)

                 <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> {{$user->dob->format('F d,y')}}</li>
                  @endif
                  @if (isset($user->accountSetting->user_address)?($user->accountSetting->user_address) : false)

                 <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> {{$user->user_address??''}}</li>
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
 <iframe id="{{$user->id}}" style="visibility:visible;width: 350px; height: 416px; border: 1px solid rgb(214, 214, 214); display: none;position: fixed;
  bottom: 100px;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;" onload="this.style.visibility = 'visible';" src="{{URL::to('/')}}/chat/{{$user->id}}"></iframe>
  <button class="open-button" id="close-chat" onclick="closeChat()"><img src="{{asset('assets/ressoli-theme/assets/crossiconchat.png')}}"></button>
@endsection

@section('pageStyles')
<style type="text/css">
   .open-button {
    /* background-color: #555; */
    /* color: white; */
    /* padding: 16px 20px; */
    /* border: none; */
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 85px;
    display: none;
    border: none;
}
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

@section('pageScripts')
    <script>
      function myFunction(id)
      {
         // alert(id);
          // document.querySelectorAll('iframe').forEach( iframe => {
          //   alert(iframe..style.display);
          // });
          $('iframe').hide();
          $('#close-chat').hide();
          $('#close-chat').show();
          document.getElementById(id).style.display = "inline";
      }
      function closeChat()
      {
        $('iframe').hide();
          $('#close-chat').hide();
      }
    </script>

@endsection