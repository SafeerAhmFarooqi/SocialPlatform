<div wire:poll>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @foreach ($posts as $post)
    <div class="post-content">
      @if ($post->image_path)
      <img src="{{asset('storage/'.$post->image_path)}}" alt="post-image" class="img-responsive post-image" />
      @endif
      
      <div class="post-container">
        <img src="{{asset('assets/FriendFinder-Theme/images/users/user-5.jpg')}}" alt="user" class="profile-photo-md pull-left" />
        <div class="post-detail">
          <div class="user-info">
            <h5><a href="#" class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
            <p class="text-muted">Published a photo about 3 mins ago</p>
          </div>
          <div class="reaction">
            <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
          </div>
          <div class="line-divider"></div>
          <div class="post-text">
            <p>{{$post->post_text}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
          </div>
          <div class="line-divider"></div>
          <div class="post-comment">
            <img src="{{asset('assets/FriendFinder-Theme/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm" />
            <p><a href="#" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
          </div>
          <div class="post-comment">
            <img src="{{asset('assets/FriendFinder-Theme/images/users/user-4.jpg')}}" alt="" class="profile-photo-sm" />
            <p><a href="#" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
          </div>
          <div class="post-comment">
            <img src="{{asset('assets/FriendFinder-Theme/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
            <input type="text" class="form-control" placeholder="Post a comment">
          </div>
        </div>
      </div>
    </div> 
    @endforeach
   
      
</div>
