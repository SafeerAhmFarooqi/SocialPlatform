@extends('dashboards.user.dashboard-layout-setting')
@section('page-content')
<div class="col-md-7">

    <!-- Basic Information
    ================================================= -->
    <div class="edit-profile-container">
        <div class="block-title">
          <h4 class="grey"><i class="icon ion-ios-settings"></i>Account Settings</h4>
          <div class="line"></div>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
          <div class="line"></div>
        </div>
        <div class="edit-block">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
           @endif
           @if(session()->has('error'))
           <div class="alert alert-danger">
               {{ session()->get('error') }}
           </div>
          @endif
            <form action="{{route('user.profile.setting.change')}}" method="post">
                @csrf
                <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Enable Date of Birth</strong></div>
                          <p>Enable this if you want people to See your Date of Birth</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" name="setting[]" value='dob' {{!isset(Auth::user()->accountSetting->first()->user_dob)? '' : (Auth::user()->accountSetting->first()->user_dob? 'checked' : '')}}>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Enable Address</strong></div>
                          <p>Enable this if you want people to See your Address</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" name="setting[]" value='address' {{!isset(Auth::user()->accountSetting->first()->user_address)? '' : (Auth::user()->accountSetting->first()->user_address? 'checked' : '')}}>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Enable Phone Number</strong></div>
                          <p>Enable this if you want people to See your Phone Number</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" name="setting[]" value='phone' {{!isset(Auth::user()->accountSetting->first()->user_phone)? '' : (Auth::user()->accountSetting->first()->user_phone? 'checked' : '')}}>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Enable About Me</strong></div>
                          <p>Enable this if you want people to See your About Me</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" name="setting[]" value='about' {{!isset(Auth::user()->accountSetting->first()->user_about)? '' : (Auth::user()->accountSetting->first()->user_about? 'checked' : '')}}>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
            </form>
          
          
        </div>
      </div>
  </div>
@endsection
@section('pageScripts')

@endsection