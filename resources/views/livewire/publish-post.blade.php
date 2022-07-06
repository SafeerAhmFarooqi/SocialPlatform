<div>
    {{-- Stop trying to control. --}}
    <div class="create-post">
        <div class="row">
           <form wire:submit.prevent="submit">

            <div class="col-md-7 col-sm-7">
                <div class="form-group">
                  <img src="{{asset('assets/FriendFinder-Theme/images/users/user-1.jpg')}}" alt="" class="profile-photo-md" />
                  <textarea wire:model="postText" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                </div>
              </div>
                  <div class="col-md-5 col-sm-5">
                <div class="tools">
                  <ul class="publishing-tools list-inline">
                    {{-- <li><a href="#"><i class="ion-compose"></i></a></li>
                    <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                    <li><a href="#"><i class="ion-map"></i></a></li> --}}
                    <li><a href="#">
                        <label for="image-upload" style="cursor: pointer;">
                            <i class="ion-images"></i>
                        </label>
                        <input type="file"  id="image-upload" style="display:none;" wire:model="postImage">  
                    </a></li>
                    <li>
                        <div wire:loading wire:target="postImage">
                            <img src="{{ asset('assets/loading.gif') }}">
                        </div>
                    </li>
                    
                </ul>
                <div wire:loading.remove wire:target="postImage" style="display: inline;">
                    <button class="btn btn-primary pull-right" type="submit">Publish</button>
                </div>
                  
                </div>
              </div>
           </form>
           
           
        </div>
           @error('postText')
           <div class="alert alert-danger" role="alert">
               {{$message}}
           </div>
           @enderror
           @error('postImage')
           <div class="alert alert-danger" role="alert">
               {{$message}}
           </div>
           @enderror
           @if (session()->has('success'))
           <div class="alert alert-success">
               {{ session()->get('success') }}
           </div>
           @endif
           @if (session()->has('error'))
           <div class="alert alert-danger">
               {{ session()->get('error') }}
           </div>
           @endif
    </div>
</div>
