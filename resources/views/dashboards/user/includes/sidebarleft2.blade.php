<div class="col-md-3 static">
    <div class="profile-card">
        <img src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="user" class="profile-photo" />
        <h5><a href="#" class="text-white">{{Auth::user()->firstname.' '.Auth::user()->lastname}}</a></h5>
        <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
    </div><!--profile card ends-->
    <ul class="nav-news-feed">
      <li><i class="icon ion-ios-paper"></i><div><a href="{{route('dashboard')}}">My Newsfeed</a></div></li>
      <li><i class="icon ion-ios-people"></i><div><a href="{{route('user.dashboard.people-nearby')}}">People Nearby</a></div></li>
      <li><i class="icon  fa fa-users"></i><div><a href="{{route('user.dashboard.groups')}}">Groups</a></div></li>
      <li><i class="icon ion-chatboxes"></i><div><a href="{{route(config('chatify.routes.prefix'))}}">Messages</a></div></li>
      <li><i class="icon ion-chatboxes"></i><div><a href="{{route('user.dashboard.users.page')}}">Users</a></div></li>
      <li><i class="icon ion-chatboxes"></i><div><a href="{{route('user.dashboard.voucher.page')}}">Vouchers</a></div></li>
      <li><i class="icon ion-chatboxes"></i><div><a href="{{route('user.dashboard.saving.page')}}">Savings</a></div></li>
    </ul><!--news-feed links ends-->
    <div id="chat-block">
      <div class="title">Chat online</div>
      <ul class="online-users list-inline">
        <li><a href="#" title="Linda Lohan"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-2.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="Sophia Lee"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-3.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="John Doe"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-4.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="Alexis Clark"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-5.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="James Carter"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-6.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="Robert Cook"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-7.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="Richard Bell"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-8.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="Anna Young"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-9.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        <li><a href="#" title="Julia Cox"><img src="{{asset('assets/FriendFinder-Theme/images/users/user-10.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
      </ul>
    </div><!--chat block ends-->
  </div>