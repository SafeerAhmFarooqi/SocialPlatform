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
            <h5><a href="#" class="profile-link">{{$post->user->firstname.' '.$post->user->lastname}}</a>  {{-- <span class="following">following</span> --}}</h5>  
            <p class="text-muted">Published a post about {{$post->created_at->diffForHumans()}}</p>
          </div>
          <div class="reaction">
            {{-- <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a> --}}
          </div>
          <div class="line-divider"></div>
          <div class="post-text">
             <p>{{$post->post_text}} {{-- <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i> --}} </p> 
          </div>
          <div class="line-divider"></div>
          @foreach ($post->comments as $comment)
          <div class="post-comment">
            <img src="{{asset('assets/FriendFinder-Theme/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm" />
            <p><a href="#" class="profile-link">{{$comment->user->firstname.' '.$comment->user->lastname}} </a> {{-- <i class="em em-laughing"></i> --}} {{$comment->comment}} </p>
          </div>
          @endforeach
          <form wire:submit.prevent="submit">
            <div class="post-comment">
              <img src="{{asset('assets/FriendFinder-Theme/images/users/user-1.jpg')}}" alt="" class="profile-photo-sm" />
              <input type="text" class="form-control" placeholder="Post a comment" wire:model.lazy="commentText" >  
            </div>
            <div class="tools" style="margin-bottom: 5%;">
              <button class="btn btn-primary pull-right" type="submit" wire:click="$set('selectedPostId', {{$post->id}})">Comment</button>
            </div>
          </form>
        </div>
      </div>
    </div> 
    @endforeach
   
      
</div>
