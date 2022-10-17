{{-- <div wire:poll>
  
    @foreach ($posts as $post)
    <div class="post-content">
      @if ($post->image_path)
      <img src="{{asset('storage/'.$post->image_path)}}" alt="post-image" class="img-responsive post-image" />
      @endif
      
      <div class="post-container">
        <img src="{{!is_null(Auth::user()->profile_pic_path)?(Auth::user()->profile_pic_path?asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="user" class="profile-photo-md pull-left" />
        <div class="post-detail">
          <div class="user-info">
            <h5><a href="#" class="profile-link">{{$post->user->firstname.' '.$post->user->lastname}}</a> </h5>  
            <p class="text-muted">Published a post about {{$post->created_at->diffForHumans()}}</p>
          </div>
          <div class="reaction">
          
          </div>
          <div class="line-divider"></div>
          <div class="post-text">
             <p>{{$post->post_text}}  </p> 
          </div>
          <div class="line-divider"></div>
          @foreach ($post->comments as $comment)
          <div class="post-comment">
            <img src="{{$comment->user->profile_pic_path? asset('storage/'.$comment->user->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="" class="profile-photo-sm" />
            <p><a href="#" class="profile-link">{{$comment->user->firstname.' '.$comment->user->lastname}} </a>  {{$comment->comment}} </p>
          </div>
          @endforeach
          <form wire:submit.prevent="submit">
            <div class="post-comment">
              <img src="{{Auth::user()->profile_pic_path?asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="" class="profile-photo-sm" />
              <input type="text" class="form-control" placeholder="Post a comment" wire:model.lazy="commentText" > 
            
            <div class="custom-search">
              <input type="text" class="custom-search-input pe-4 bg-light form-control " placeholder="Write Something Here.." wire:model.lazy="commentText"  >
              <button class="custom-search-botton" type="submit" ire:click="$set('selectedPostId', {{$post->id}})"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>  
            </div>


            </div>
         <!--    <div class="tools" style="margin-bottom: 5%;">
              <button class="btn btn-primary pull-right" type="submit" wire:click="$set('selectedPostId', {{$post->id}})">Comment</button>
            </div> -->
          </form>
        </div>
      </div>
    </div> 
    @endforeach
   
      
</div> --}}









<div wire:poll.5000ms>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="tiny-slider arrow-hover overflow-hidden" wire:ignore style="margin-bottom: 10px;">
      <div class="tiny-slider-inner ms-n4" data-arrow="true" data-dots="true" data-loop="false" data-autoplay="false" data-items-xl="4" data-items-lg="3" data-items-md="3" data-items-sm="3" data-items-xs="2" data-gutter="12" data-edge="30">

        

        <!-- Slider items -->
        <div >
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px div-border" id="1" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social8.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="javascript:;" onclick="select(1)" class="stretched-link text-white small">Armed Forces</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>



        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" id="2" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social9.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="javascript:;" onclick="select(2)" class="stretched-link text-white small">Police</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>




        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" id="3" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social10.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="javascript:;" onclick="select(3)" class="stretched-link text-white small">Fire</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>




        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" id="4" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social11.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="javascript:;" onclick="select(4)" class="stretched-link text-white small">THW</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>



        <!-- Slider items -->
        <div>
          <!-- Card START -->
          <div class="card card-overlay-bottom border-0 position-relative h-150px" id="5" style="background-image:url({{asset('assets/ressoli-theme/assets/images/social12.jpg')}}); background-position: center left; background-size: cover;">
            <div class="card-img-overlay d-flex align-items-center p-2">
              <div class="w-100 mt-auto">
                <!-- Name -->
                <a href="javascript:;" onclick="select(5)" class="stretched-link text-white small">Paramedics</a>
              </div>
            </div>
          </div>
          <!-- Card END -->
        </div>


        
      </div>
    </div>
    <livewire:publish-post/>
    @foreach ($posts as $post)
    <div class="card" style="margin-bottom: 10px;">
        <!-- Card header START -->
        <div class="card-header border-0 pb-0">
          <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <!-- Avatar -->
              <div class="avatar avatar-story me-2">
                <a href="#!"> <img class="avatar-img rounded-circle" src="{{($post->user->profile_pic_path??false)? asset('storage/'.$post->user->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""> </a>
              </div>
              <!-- Info -->
              <div>
                <div class="nav nav-divider">
                  <h6 class="nav-item card-title mb-0"> <a href="#!"> {{$post->user->firstname.' '.$post->user->lastname}}</a>
                    
                  </h6>
                  
                  <span class="nav-item small"> {{$post->created_at->diffForHumans()??''}}</span>
                  
                </div>
                <p>{{$post->groupName($post->type_id)}}</p>
                {{-- <p class="mb-0 small">Police</p> --}}
              </div>
            </div>
            <!-- Card feed action dropdown START -->
            @if ($post->user_id==Auth::user()->id)
            <div class="dropdown">
              <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots"></i>
              </a>
              <!-- Card feed action dropdown menu -->
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction"> 
                <li><a class="dropdown-item" href="javascript:;" wire:click="deletePost({{$post->id}})"> <i class="bi bi-x-circle fa-fw pe-2"></i>Delete </a></li> 
              </ul>  
            </div>
            @endif
            
            <!-- Card feed action dropdown END -->
          </div>
        </div>
        <!-- Card header END -->
        <!-- Card body START -->
        <div class="card-body">
          <p>{{$post->post_text??''}}</p>
          <!-- Card img -->
          @if ($post->image_path??false)
          <img class="card-img" src="{{asset('storage/'.$post->image_path)}}" alt="Post">    
          @endif
          
          <!-- Feed react START -->
          <ul class="nav nav-stack py-3 small">
             
            <li class="nav-item">
              <a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments ({{$post->comments->count()}})</a>
            </li>
            <!-- Card share action START -->
             
            <!-- Card share action END -->
          </ul>
          <!-- Feed react END -->
  
          <!-- Add comment -->
          <div class="d-flex mb-3">
            <!-- Avatar -->
            <div class="avatar avatar-xs me-2">
              <a href="#!"> <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""> </a>
            </div>
            <!-- Comment box  -->
            <form class="w-100" wire:submit.prevent="submit">
           

                   <div class="custom-search">
              <input type="text" class="custom-search-input pe-4 bg-light form-control " placeholder="Write Something Here.." wire:model.lazy="commentText">
              <button class="custom-search-botton" type="submit" wire:click="$set('selectedPostId', {{$post->id}})"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>  
            </div>



            </form>
          </div>
          <!-- Comment wrap START -->
          <ul class="comment-wrap list-unstyled">
            <!-- Comment item START -->
            @foreach ($post->comments as $comment)
            <li class="comment-item">
                <div class="d-flex align-items-center justify-content-between">
                  <!-- Avatar -->
                 
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-xs">
                      <a href="#!"><img class="avatar-img rounded-circle" src="{{($comment->user->profile_pic_path??false)? asset('storage/'.$comment->user->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""></a>
                    </div>
                    <!-- Comment by -->
                    <div class="bg-light rounded-start-top-0 p-3 rounded">
                      <div class="d-flex justify-content-between">
                        <h6 class="mb-1"> <a href="#!"> {{($comment->user->firstname??'').' '.($comment->user->lastname??'')}} </a></h6>
                        <small class="ms-2">{{$comment->created_at->diffForHumans()??''}}</small>
                      </div>
                      <p class="small mb-0">{{$comment->comment??''}}</p>
                    </div>
                    <!-- Comment react -->
                   
                  </div>
                  @if ($comment->user_id==Auth::user()->id)
                  <div class="dropdown">
                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-three-dots"></i>
                    </a>
                    <!-- Card feed action dropdown menu -->
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction"> 
                      <li><a class="dropdown-item" href="javascript:;" wire:click="deleteComment({{$comment->id}})"> <i class="bi bi-x-circle fa-fw pe-2"></i>Delete </a></li> 
                    </ul>  
                  </div>
                  @endif
                </div>
              
               <br>
                <!-- Comment item nested END -->
              </li>
           
            @endforeach
          
            <!-- Comment item END -->
            <!-- Comment item START -->
           
            </li>
            <!-- Comment item END -->
          </ul>
          <!-- Comment wrap END -->
        </div>
        <!-- Card body END -->
        <!-- Card footer START -->
        
        <!-- Card footer END -->
      </div>
    @endforeach
   
    
</div>

@section('pageScripts')
    <script>
      function select(typeId)
      {
        document.getElementById('1').style.setProperty("border", "none", "important");
        document.getElementById('2').style.setProperty("border", "none", "important");
        document.getElementById('3').style.setProperty("border", "none", "important");
        document.getElementById('4').style.setProperty("border", "none", "important");
        document.getElementById('5').style.setProperty("border", "none", "important");
        document.getElementById(typeId).style.setProperty("border", "5px solid red", "important");
        @this.set('selectedType',typeId );
       
      }
    </script>
@endsection
