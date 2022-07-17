<div class="col-md-3">          
    <!--Edit Profile Menu-->
    <ul class="edit-menu">
        <li class="{{isset($activeLink)?($activeLink==1?'active':'') : ''}}"><i class="icon ion-ios-information-outline"></i><a href="{{route('user.profile.basic.show')}}">Basic Information</a></li>
        <li class="{{isset($activeLink)?($activeLink==2?'active':'') : ''}}"><i class="icon ion-ios-briefcase-outline"></i><a href="#">Education and Work</a></li>
        <li class="{{isset($activeLink)?($activeLink==3?'active':'') : ''}}"><i class="icon ion-ios-heart-outline"></i><a href="#">My Interests</a></li>
      <li class="{{isset($activeLink)?($activeLink==4?'active':'') : ''}}"><i class="icon ion-ios-settings"></i><a href="{{route('user.profile.setting.show')}}">Account Settings</a></li>
        <li class="{{isset($activeLink)?($activeLink==5?'active':'') : ''}}"><i class="icon ion-ios-locked-outline"></i><a href="{{route('user.profile.password.show')}}">Change Password</a></li>
    </ul>
  </div>