{{-- <div>

    <div class="create-post">
        <div class="row">
           <form wire:submit.prevent="submit">

            <div class="col-md-7 col-sm-7">
                <div class="form-group">
                  <img src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="" class="profile-photo-md" />
                  <textarea wire:model="postText" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                </div>
              </div>
                  <div class="col-md-5 col-sm-5">
                <div class="tools">
                  <ul class="publishing-tools list-inline">
                  
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
</div> --}}



<div>
    <div class="card card-body" style="margin-bottom: 10px;">
        <div class="d-flex mb-3">
          <!-- Avatar -->
          <div class="avatar avatar-xs me-2">
            <a href="#"> <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt=""> </a>
          </div>
          <!-- Post input -->
          <form class="w-100" wire:submit.prevent="submit">
            <textarea class="form-control pe-4 border-0" rows="2" data-autoresize placeholder="Share your thoughts..." wire:model="postText"></textarea>
            <ul class="nav nav-pills nav-stack small fw-normal" style="float:right">

                <li>
                    <div wire:loading wire:target="postImage">
                        <img src="{{ asset('assets/loading.gif') }}">
                    </div>
                </li>

                <li class="nav-item">
                
                  <a href="#" class="nav-link bg-light py-1 px-2 mb-0" style="margin-top: 30px;padding: 10px !important; ">
                    <label for="image-upload" style="cursor: pointer;">
                        <i class="bi bi-image-fill text-success pe-2"></i>Upload
                    </label>
                    <input type="file"  id="image-upload" style="display:none;" wire:model="postImage">  
                </a>
                </li>
                {{-- <li>
                    <div class="col-sm-12">
                        <select class="form-control" id="country" wire:model="selectedType" style="margin-top:30px">            
                                  <option value="1">Armed Forces</option>    
                                  <option value="2">Police</option>           
                                  <option value="3">Fire</option>      
                                    <option value="4">THW</option>    
                                    <option value="5" selected>Paramedic</option>       
                                  </select>
                                  @error('selectedType')
                                  <div class="alert alert-danger" role="alert">
                                      {{$message}}
                                  </div>
                                  @enderror
                     </div>
                </li> --}}

                
                 
              
              <li>
                <div wire:loading.remove wire:target="postImage" style="display: inline;float: right;margin-right: 20px;margin-top: 26px;">
                    <button class="btn btn-primary pull-right" type="submit">Publish</button>
                </div>
             </li>

         </ul>
        </form>
        </div>
        <!-- Share feed toolbar START -->
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
        <!-- Share feed toolbar END -->
      </div>

      <div class="modal fade" id="feedActionPhoto" tabindex="-1" aria-labelledby="feedActionPhotoLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal feed header START -->
            <div class="modal-header">
              <h5 class="modal-title" id="feedActionPhotoLabel">Add post photo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal feed header END -->
      
              <!-- Modal feed body START -->
              <div class="modal-body">
              <!-- Add Feed -->
              <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-xs me-2">
                  <img class="avatar-img rounded-circle" src="{{Auth::user()->profile_pic_path? asset('storage/'.Auth::user()->profile_pic_path) : asset('assets/ressoli-theme/assets/images/social13.png')}}" alt="">
                </div>
                <!-- Feed box  -->
                <form class="w-100">
                  <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
                </form>
              </div>
      
              <!-- Dropzone photo START -->
              <div>
                <label class="form-label">Upload attachment</label>
                <div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
                  <div class="dz-message">
                    <i class="bi bi-images display-3"></i>
                    <p>Drag here or click to upload photo.</p>
                  </div>
                </div>
              </div>
              <!-- Dropzone photo END -->
      
              </div>
              <!-- Modal feed body END -->
      
              <!-- Modal feed footer -->
              <div class="modal-footer ">
                <!-- Button -->
                  <button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-success-soft">Post</button>
              </div>
              <!-- Modal feed footer -->
          </div>
        </div>
      </div>
</div>
