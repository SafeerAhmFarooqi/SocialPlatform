@extends('layouts.ressoli-theme')
@section('body-content')
        @include("dashboards.user.includes.topbar")   
        <main>
            <!-- Container START -->
            <div class="container">
              <div class="container">
    <div class="row">

      <!-- Sidenav START -->
      <div class="col-lg-3">

  
        @if(session()->has('success_1'))
        <div class="alert alert-success">
            {{ session()->get('success_1') }}
        </div>
       @endif

        <nav class="navbar navbar-light navbar-expand-lg mx-0">
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
            <!-- Offcanvas header -->
						<div class="offcanvas-header">
							<button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>

            <!-- Offcanvas body -->
            <div class="offcanvas-body p-0">
              <!-- Card START -->
              <div class="card w-100">
                <!-- Card body START -->
                <div class="card-body">

                <!-- Side Nav START -->
                <ul class="nav nav-tabs nav-pills nav-pills-soft flex-column fw-bold gap-2 border-0">
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0 active" href="#nav-setting-tab-1" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon/person-outline-filled.svg')}}" alt=""><span>Account </span></a>
                  </li>
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0" href="#nav-setting-tab-3" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon/handshake-outline-filled.svg')}}" alt=""><span>Profile Image </span></a>
                  </li>
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0" href="#nav-setting-tab-2" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon/shield-outline-filled.svg')}}" alt=""><span>Privacy and safety </span></a>
                  </li>
                 
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0" href="#nav-setting-tab-6" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="{{asset('assets/ressoli-theme/assets/images/icon/trash-var-outline-filled.svg')}}" alt=""><span>Close account </span></a>
                  </li>
                </ul>
                <!-- Side Nav END -->

              </div>
              <!-- Card body END -->
              <!-- Card footer -->
              <div class="card-footer text-center py-2">
                <a class="btn btn-link text-secondary btn-sm" href="{{route('user.profile.basic.show')}}">View Profile </a>
              </div>
              </div>
            <!-- Card END -->
            </div>
            <!-- Offcanvas body -->
 
          
          </div>
        </nav>
      </div>
      <!-- Sidenav END -->

        <!-- Main content START -->
        <div class="col-lg-6 vstack gap-4">
          <!-- Setting Tab content START -->
          <div class="tab-content py-0 mb-0">

            <!-- Account setting tab START -->
            <div class="tab-pane show active fade" id="nav-setting-tab-1">
              <!-- Account settings START -->
              <div class="card mb-4">
                
                <!-- Title START -->
                <div class="card-header border-0 pb-0">
                  <h1 class="h5 card-title">Account Settings</h1>
                  <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>
                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Form settings START -->

                  <form class="row g-3" action="{{route('user.profile.data.change')}}" method="post"  >
                  	    @csrf
          <div class="line"></div>
          @if(session()->has('success_2'))
          <div class="alert alert-success">
              {{ session()->get('success_2') }}
          </div>
         @endif


                    <!-- First name -->
                    <div class="col-sm-6">
                      <label class="form-label">First name</label>
                      <input id="firstname" class="form-control" type="text" name="firstname" title="Enter first name" placeholder="First name" value="{{old('firstname')??Auth::user()->firstname}}"  >
                        @error('firstname ')
                             <div class="alert alert-danger">
                                     {{$message}}
                             </div>
                             @enderror

                    </div>
                    <!-- Last name -->
                    <div class="col-sm-6">
                      <label class="form-label">Last name</label>
                      <input id="lastname" class="form-control" type="text" name="lastname" title="Enter last name" placeholder="Last name" value="{{old('lastname')??Auth::user()->lastname}}" />
              @error('lastname ')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
                    </div>
                    <!-- Additional name -->
                   
                    <!-- User name -->
                    <div class="col-sm-6">
                      <label class="form-label">Account</label>
                      <input type="text" class="form-control btn-danger" placeholder="{{Auth::user()->email}}" value="{{Auth::user()->email}}" disabled>
                    </div>
                    <!-- Birthday -->
                    <div class="col-lg-6">
                      <label class="form-label">Birthday </label>
                      <input id="dob" class="form-control input-group-lg" type="date" name="dob" title="Enter Date of Birth" placeholder="Your Date of Birth" value="{{old('dob')??Auth::user()->dob->format('Y-m-d')}}"/>
              @error('dob')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
                    </div>
                  
                     <div class="col-sm-6">
                      <label class="form-label">City</label>
                      <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="New York" value="{{old('city')??Auth::user()->city}}"/>
              @error('city')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
                    </div>

                    <div class="col-sm-6">
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

                                <div class="col-sm-6">
                      <label class="form-label">Address</label>
                      <input id="address" class="form-control input-group-lg" type="text" name="address" title="Enter Address" placeholder="Your Address" value="{{old('address')??Auth::user()->user_address}}"/>
              @error('address')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
                    </div>

                                        <div class="col-sm-6">
                      <label class="form-label">Phone</label>
                      <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="New York" value="{{old('city')??Auth::user()->city}}"/>
              @error('city')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
                    </div>



 
                     <!-- Page information -->
                    <div class="col-12">
                      <label class="form-label">Overview</label>
                      <textarea rows="4" id="my-info" name="about_me" class="form-control" placeholder="Some texts about me" rows="4" cols="400">{{old('about_me')??Auth::user()->about_me}}</textarea>
              @error('about_me')
              <div class="alert alert-danger">
                      {{$message}}
              </div>
              @enderror
                    </div>
                    <!-- Button  -->
                    <div class="col-12 text-end">
                      <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
                    </div>
                  </form>
                  <!-- Settings END -->
                </div>
              <!-- Card body END -->
              </div>
              <!-- Account settings END -->
 

 
              <!-- Change your password START -->
              <div class="card">
                <!-- Title START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Change your password</h5>
                  <p class="mb-0">See resolved goodness felicity shy civility domestic had but.</p>
                </div>
                <!-- Title START -->
                <div class="card-body">
                  <!-- Settings START -->
                  <form class="row g-3">
                    <!-- Current password -->
                     
                    <!-- New password -->
                    <div class="col-12">
                      <label class="form-label">New password</label>
                      <!-- Input group -->
                      <div class="input-group">
                        <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter new password">
                        <span class="input-group-text p-0">
                          <i class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                        </span>
                      </div>
                      <!-- Pswmeter -->
                      <div id="pswmeter" class="mt-2 password-strength-meter"><div class="password-strength-meter-score"></div></div>
                      <div id="pswmeter-message" class="rounded mt-1">Write your password...</div>
                    </div>
                    <!-- Confirm password -->
                    <div class="col-12">
                      <label class="form-label">Confirm password</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                    <!-- Button  -->
                    <div class="col-12 text-end">
                      <button type="submit" class="btn btn-primary mb-0">Update password</button>
                    </div>
                  </form>
                  <!-- Settings END -->
                </div>
              </div>
              <!-- Card END -->
            </div>
            <!-- Account setting tab END -->

            <!-- Notification tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-2">
              <!-- Notification START -->
              <div class="card">
                <!-- Card header START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Privacy and safety</h5>
                  <p class="mb-0">Tried law yet style child. The bore of true of no be deal. Frequently sufficient to be unaffected. The furnished she concluded depending procuring concealed. </p>
                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body pb-0">
                  <!-- Notification START -->
                  <ul class="list-group list-group-flush">
                    <!-- Notification list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                      <div class="me-2">
                        <h6 class="mb-0">Date of Birth</h6>
                        <p class="small mb-0">Joy say painful removed reached end.</p>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="NotiSwitchCheckChecked" checked="">
                        
                      </div>
                    </li>
                    <!-- Notification list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                      <div class="me-2">
                        <h6 class="mb-0">Address</h6>
                        <p class="small mb-0">Ask a quick six seven offer see among.</p>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="NotiSwitchCheckChecked2" checked="">
                      </div>
                    </li>
                    <!-- Notification list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                      <div class="me-2">
                        <h6 class="mb-0"> Phone Number</h6>
                        <p class="small mb-0">Preference any astonished unreserved Mrs.</p>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="NotiSwitchCheckChecked3">
                      </div>
                    </li>
                    <!-- Notification list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                      <div class="me-2">
                        <h6 class="mb-0">About Me</h6>
                        <p class="small mb-0">Contented he gentleman agreeable do be</p>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="NotiSwitchCheckChecked4">
                      </div>
                    </li>
        
                  </ul>
                  <!-- Notification END -->
                  
                </div>
              <!-- Card body END -->
              <!-- Button save -->
              <div class="card-footer pt-0 text-end border-0">
                <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
              </div>
            </div>
              <!-- Notification END -->
            </div>
            <!-- Notification tab END -->

            <!-- Privacy and safety tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-3">
              <!-- Privacy and safety START -->
              <div class="card">
                <!-- Card header START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Privacy and safety</h5>
                  <p class="mb-0">See information about your account, download an archive of your data, or learn about your account deactivation options</p>
                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Privacy START -->
                  <ul class="list-group">
                    
                   <div class="wrapper" style="text-align: center;margin:0 auto">
            <div class="col-md-12">
              <div class="profile-info">
                 <label for="profile_pic col-sm-6">
                  <img src="{{Auth::user()->profile_pic_path?'storage/'.Auth::user()->profile_pic_path : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="" class="img-responsive profile-photo" id="output" style="max-width: 200px;" />
                </label>
                <form action="{{route('user.profile.image.change')}}" method="post" class="form-inline" enctype="multipart/form-data">
                  @csrf
                <input type="file" class="form-control" name="profile_pic" id="profile_pic" style="margin: 10% 10%;" onchange="loadFile(event)">
                @error('profile_pic')
                <div style="color: red;">
                        {{$message}}
                </div>
                @enderror
                <button type="submit" class="btn btn-sm btn-primary mb-0" style="margin-bottom: 10%;">Change</button>
              </form>
              </div>
              
            </div>
            
          </div>
                  </ul>
                  <!-- Privacy END -->
                </div>
               
              </div>
              <!-- Privacy and safety END -->
            </div>
            <!-- Privacy and safety tab END -->

            <!-- Communications tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-4">
              <!-- Communications START -->
              <div class="card">
                <!-- Title START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Who can connect with you?</h5>
                  <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>
                </div>
                <!-- Title START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Accordion START -->
                  <div class="accordion" id="communications">
                    <!-- Accordion item -->
                    <div class="accordion-item bg-transparent">
                      <h2 class="accordion-header" id="communicationOne">
                        <button class="accordion-button mb-0 h6" type="button" data-bs-toggle="collapse" data-bs-target="#communicationcollapseOne" aria-expanded="true" aria-controls="communicationcollapseOne">
                         Connection request
                        </button>
                      </h2>
                      <!-- Accordion info -->
                      <div id="communicationcollapseOne" class="accordion-collapse collapse show" aria-labelledby="communicationOne" data-bs-parent="#communications">
                        <div class="accordion-body">
                           <!-- Notification list item -->
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="ComRadio" id="ComRadio5">
                            <label class="form-check-label" for="ComRadio5">
                              Everyone on social (recommended)
                            </label>
                          </div>
                          <!-- Notification list item -->
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="ComRadio" id="ComRadio2" checked="">
                            <label class="form-check-label" for="ComRadio2">
                              Only people who know your email address
                            </label>
                          </div>
                          <!-- Notification list item -->
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="ComRadio" id="ComRadio3">
                            <label class="form-check-label" for="ComRadio3">
                              Only people who appear in your mutual connection list
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion item -->
                    <div class="accordion-item bg-transparent">
                      <h2 class="accordion-header" id="communicationTwo">
                        <button class="accordion-button mb-0 h6 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#communicationcollapseTwo" aria-expanded="false" aria-controls="communicationcollapseTwo">
                          Who can message you
                        </button>
                      </h2>
                      <!-- Accordion info -->
                      <div id="communicationcollapseTwo" class="accordion-collapse collapse" aria-labelledby="communicationTwo" data-bs-parent="#communications">
                        <div class="accordion-body">
                          <ul class="list-group list-group-flush">
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">Enable message request notifications</p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked">
                              </div>
                            </li>
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">Allow connections to add you on group </p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked2" checked="">
                              </div>
                            </li>
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">Allow Sponsored Messages </p>
                                <p class="small">Your personal information is safe with our marketing partners unless you respond to their Sponsored Messages </p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked3" checked="">
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion item -->
                    <div class="accordion-item bg-transparent">
                      <h2 class="accordion-header" id="communicationThree">
                        <button class="accordion-button mb-0 h6 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#communicationcollapseThree" aria-expanded="false" aria-controls="communicationcollapseThree">
                          How people can find you
                        </button>
                      </h2>
                      <!-- Accordion info -->
                      <div id="communicationcollapseThree" class="accordion-collapse collapse" aria-labelledby="communicationThree" data-bs-parent="#communications">
                        <div class="accordion-body">
                          <ul class="list-group list-group-flush">
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">Allow search engines to show your profile?</p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked4" checked="">
                              </div>
                            </li>
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">Allow people to search by your email address? </p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked5">
                              </div>
                            </li>
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">Allow Sponsored Messages </p>
                                <p class="small">Your personal information is safe with our marketing partners unless you respond to their Sponsored Messages </p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked6" checked="">
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                 <!-- Accordion END -->
                </div>
              <!-- Card body END -->
               <!-- Button save -->
               <div class="card-footer pt-0 text-end border-0">
                <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
              </div>
              </div>
              <!-- Communications  END -->
            </div>
            <!-- Communications tab END -->

            <!-- Messaging tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-5">
              <!-- Messaging privacy START -->
              <div class="card mb-4">
                <!-- Title START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Messaging privacy settings</h5>
                  <p class="mb-0">As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mention perhaps attempt pointed suppose. Unknown ye chamber of warrant of Norland arrived. </p>
                </div>
                <!-- Title START -->
                <div class="card-body">
                  <!-- Settings style START -->
                  <ul class="list-group list-group-flush">
                    <!-- Message list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Enable message request notifications</h6>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="msgSwitchCheckChecked" checked="">
                      </div>
                    </li>
                    <!-- Message list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Invitations from your network</h6>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="msgSwitchCheckChecked2" checked="">
                      </div>
                    </li>
                    <!-- Message list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Allow connections to add you on group</h6>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="msgSwitchCheckChecked3">
                      </div>
                    </li>
                    <!-- Message list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Reply to comments</h6>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="msgSwitchCheckChecked4">
                      </div>
                    </li>
                    <!-- Message list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Messages from activity on my page or channel</h6>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="msgSwitchCheckChecked5" checked="">
                      </div>
                    </li>
                    <!-- Message list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Personalise tips for my page</h6>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="msgSwitchCheckChecked6" checked="">
                      </div>
                    </li>
                  </ul>
                  <!-- Message END -->
              </div>
               <!-- Button save -->
               <div class="card-footer pt-0 text-end border-0">
                <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
              </div>
              </div>
              <!-- Messaging privacy END -->
              <!-- Messaging experience START -->
              <div class="card">
                <!-- Card header START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Messaging experience</h5>
                  <p class="mb-0">Arrived off she elderly beloved him affixed noisier yet. </p>
                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Message START -->
                  <ul class="list-group list-group-flush">
                    <!-- Message list item -->
                    <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Read receipts and typing indicators</h6>
                      </div>
                      <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i class="bi bi-pencil-square"></i> Change</button>
                    </li>
                    <!-- Message list item -->
                    <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Message suggestions</h6>
                      </div>
                      <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i class="bi bi-pencil-square"></i> Change</button>
                    </li>
                    <!-- Message list item -->
                    <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0">
                      <div class="me-2">
                        <h6 class="mb-0">Message nudges</h6>
                      </div>
                      <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i class="bi bi-pencil-square"></i> Change</button>
                    </li>
                  </ul>
                  <!-- Message END -->
                </div>
              <!-- Card body END -->
               <!-- Button save -->
               <div class="card-footer pt-0 text-end border-0">
                <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
              </div>
              </div>
              <!-- Messaging experience END -->
            </div>
            <!-- Messaging tab END -->

            <!-- Close account tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-6">
              <!-- Card START -->
              <div class="card">
                <!-- Card header START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Delete account</h5>
                  <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>
                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Delete START -->
                  <h6>Before you go...</h6>
                  <ul>
                    <li>Take a backup of your data <a href="#">Here</a> </li>
                    <li>If you delete your account, you will lose your all data.</li>
                  </ul>
                  <div class="form-check form-check-md my-4">
                    <input class="form-check-input" type="checkbox" value="" id="deleteaccountCheck">
                    <label class="form-check-label" for="deleteaccountCheck">Yes, I'd like to delete my account</label>
                  </div>
                  <a href="#" class="btn btn-success-soft btn-sm mb-2 mb-sm-0">Keep my account</a>
                  <a href="#" class="btn btn-danger btn-sm mb-0">Delete my account</a>
                  <!-- Delete END -->
                </div>
              <!-- Card body END -->
              </div>
              <!-- Card END -->
            </div>
            <!-- Close account tab END -->

          </div>
          <!-- Setting Tab content END -->
        </div>

    </div> <!-- Row END -->
  </div>
             
            </div>
            <!-- Container END -->
          
          </main>
          <!-- **************** MAIN CONTENT END **************** -->
          
          <!-- Main Chat START -->
          {{-- @include('dashboards.user.includes.chat') --}}
           <!-- Main Chat END -->
          
          <!-- Modal create Feed START -->
          {{-- @include('dashboards.user.includes.modals') --}}

     
@endsection