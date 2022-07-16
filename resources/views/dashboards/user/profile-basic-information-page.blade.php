@extends('dashboards.user.dashboard-layout-setting')
@section('page-content')
<div class="col-md-7">

    <!-- Basic Information
    ================================================= -->
    <div class="edit-profile-container">
      <div class="block-title">
        <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
        <div class="line"></div>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
        <div class="line"></div>
      </div>
      <div class="edit-block">
        
        @if(session()->has('success_1'))
        <div class="alert alert-success">
            {{ session()->get('success_1') }}
        </div>
       @endif
          <div class="row">
            <div class="col-md-3">
              <div class="profile-info">
                <p class="text-muted">Profile Image</p>
                <label for="profile_pic">
                  <img src="{{Auth::user()->profile_pic_path?'storage/'.Auth::user()->profile_pic_path : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="" class="img-responsive profile-photo" id="output"/>
                </label>
                <form action="{{route('user.profile.image.change')}}" method="post" class="form-inline" enctype="multipart/form-data">
                  @csrf
                <input type="file" name="profile_pic" id="profile_pic" style="margin: 10% 10%;" onchange="loadFile(event)">
                @error('profile_pic')
                <div style="color: red;">
                        {{$message}}
                </div>
                @enderror
                <button type="submit" class="btn btn-primary" style="margin-bottom: 10%;">Change</button>
              </form>
              </div>
              
            </div>
            
          </div>
          
        <form action="{{route('user.profile.data.change')}}" method="post" class="form-inline">
          @csrf
          <div class="line"></div>
          @if(session()->has('success_2'))
          <div class="alert alert-success">
              {{ session()->get('success_2') }}
          </div>
         @endif
          <div class="row">
            <div class="form-group col-xs-6">
              <label for="firstname">First name</label>
              <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" value="{{old('firstname')??Auth::user()->firstname}}" />
              @error('firstname ')
                             <div class="alert alert-danger">
                                     {{$message}}
                             </div>
                             @enderror
            </div>
            <div class="form-group col-xs-6">
              <label for="lastname" class="">Last name</label>
              <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" value="{{old('lastname')??Auth::user()->lastname}}" />
              @error('lastname ')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="email">My email</label>
              <p class="text-muted">{{Auth::user()->email}}</p>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-6">
              <label for="address">Date of Birth</label>
              <p class="text-muted">{{Auth::user()->dob->format('F d, Y') }}</p>
              <input id="dob" class="form-control input-group-lg" type="date" name="dob" title="Enter Date of Birth" placeholder="Your Date of Birth" value="{{old('dob')??Auth::user()->dob->format('Y-m-d')}}"/>
              @error('dob')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="address">Address</label>
              <input id="address" class="form-control input-group-lg" type="text" name="address" title="Enter Address" placeholder="Your Address" value="{{old('address')??Auth::user()->user_address}}"/>
              @error('address')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-6">
              <label for="city"> My city</label>
              <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="New York" value="{{old('city')??Auth::user()->city}}"/>
              @error('city')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group col-xs-6">
              <label for="country">My country</label>
              <select class="form-control" id="country" name="country">
                <option value="country" disabled selected>Country</option>
                @foreach ($countries as $country)
                <option value="{{$country->id}}" {{Auth::user()->country_id==$country->id? 'Selected' : ''}}>{{$country->country}}</option>    
                @endforeach
              </select>
              @error('country')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="my-info">About me</label>
              <textarea id="my-info" name="about_me" class="form-control" placeholder="Some texts about me" rows="4" cols="400">{{old('about_me')??Auth::user()->about_me}}</textarea>
              @error('about_me')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('pageScripts')
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection