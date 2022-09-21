@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-7">

    <div class="friend-list">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-md-6 col-sm-6">
                <div class="friend-card">
                    <img src="{{asset('assets/FriendFinder-Theme/images/covers/1.jpg')}}" alt="profile-cover" class="img-responsive cover" />
                    <div class="card-info">
                    <img src="{{$user->profile_pic_path?asset('storage/'.$user->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="user" class="profile-photo-lg" />
                    <div class="friend-info">
                      <a href="{{route('user',$user->id)}}" class="pull-right text-green">Chat</a>
                        <h5><a href="{{route('user.dashboard.user.information',$user->id)}}" class="profile-link">{{substr($user->firstname.' '.$user->lastname,0,25)}}</a></h5>
                        
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
           
        </div>
    </div>

</div>
@endsection