<div>
    <div class="row justify-content-center align-items-center vh-100 py-5">
        <!-- Main content START -->
        <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
          <!-- Sign up START -->
          <div class="card card-body rounded-3 p-4 p-sm-5">
            <div class="text-center">
              <!-- Title -->
              <h1 class="mb-2">Sign up</h1>
              <span class="d-block">Already have an account? <a href="{{ route('login') }}">Sign in here</a></span>
            </div>
            <!-- Form START -->
           
                <form  id='registration_form' class="mt-4 form-inline" wire:submit.prevent="submit" enctype="multipart/form-data">
 
                  
              <!-- Name -->
              <div class="mb-3 input-group-lg">
                <input type="text" class="form-control" placeholder="First Name" wire:model="selectedFirstName">
                 @error('selectedFirstName')
                                      <div class="bg-danger" role="alert">
                                          {{$message}}
                                      </div>
                                      @enderror
               </div>
              <div class="mb-3 input-group-lg">
                <input type="text" class="form-control" placeholder="Last Name" wire:model="selectedLastName">
                @error('selectedLastName')
                                      <div class="bg-danger" role="alert">
                                          {{$message}}
                                      </div>
                                      @enderror
               </div>
              <!-- Email -->
              <div class="mb-3 input-group-lg">
                <input type="email" class="form-control" placeholder="Enter Email" wire:model="selectedEmail"/>
                        @error('selectedEmail')
                                      <div class="bg-danger" role="alert">
                                          {{$message}}
                                      </div>
                                      @enderror
                <small>We'll never share your email with anyone else.</small>
              </div>
              <!-- New password -->
              <div class="mb-3 position-relative">
                <!-- Input group -->
                <div class="input-group input-group-lg">
                  <input class="form-control fakepassword" type="password" id="psw-input" wire:model="selectedPassword" placeholder="Enter new password">
                  
                   @error('selectedPassword')
                                      <div class="bg-danger" role="alert">
                                          {{$message}}
                                      </div>
                                      @enderror
  
                </div>
                
              <!-- Confirm password -->
              <div class="mb-3 input-group-lg">
                <input class="form-control" type="password" wire:model="selectedConfirmPassword" placeholder="Confirm password">
                 @error('selectedConfirmPassword')
                                      <div class="bg-danger" role="alert">
                                          {{$message}}
                                      </div>
                                      @enderror
  
              </div>
  
  
               
              <div class="mb-3 input-group-lg">
               <div class="row">
                <div class="form-group col-xs-6">
                  <label for="city">Date Of Birth</label>
                  <input  class="form-control input-group-lg reg_name" type="date"  title="Date Of Birth" placeholder="Date Of Birth" wire:model="selectedDateOfBirth" />
                  @error('selectedDateOfBirth')
                  <div class="bg-danger" role="alert">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                    </div>
              </div>
  
     
              <div class="mb-3 input-group-lg">
               <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" id="country" wire:model="selectedCountry">
                          <option value="" selected>Country</option>
                          @foreach ($countries as $country)
                          <option value="{{$country->id}}">{{$country->country}}</option>    
                          @endforeach
                        </select>
                        @error('selectedCountry')
                        <div class="bg-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                      </div>
              </div>
  
                <!-- Confirm password -->
             
                <div class="mb-3 input-group-lg">
                  <div class="form-group col-xs-6">
                           <label for="country" class="sr-only"></label>
                           <select class="form-control" id="country"  wire:model="selectedCity">
                             <option selected value="">City</option>
                             @foreach ($cities as $city)
                             <option value="{{$city->id}}">{{$city->name}}</option>    
                             @endforeach
                           </select>
                           @error('selectedCity')
                           <div class="bg-danger" role="alert">
                               {{$message}}
                           </div>
                           @enderror
                         </div>
                 </div>
  
                <!-- Confirm password -->
              <div class="mb-3 input-group-lg">
                <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Address</label>
                        <input  class="form-control input-group-lg" type="text" wire:model="selectedAddress" title="Enter Address" placeholder="Your Address" />
                        @error('selectedAddress')
                                      <div class="bg-danger" role="alert">
                                          {{$message}}
                                      </div>
                                      @enderror
                      </div>
              </div>
  
  
  
              <!-- Confirm password -->
              <div class="mb-3 input-group-lg">
                 <div class="form-group col-xs-12">
                        <label  class="sr-only">Document For Verification</label>
                        <input  class="form-control input-group-lg reg_name" type="file" wire:model="selectedDocument"/>
                                        <p><span href="#" style="color:#D10000">* Document Must Upload For Verification</span></p>
  
                        <span>@error('selectedDocument')
                          <div class="bg-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror</span>
                      </div>
              </div>
  
  
  
  
  
              <!-- Keep me signed in -->
              <div class="mb-3 text-start">
                <input type="radio" class="form-check-input" wire:model="selectedCategory" value="Armed Forces"  >
                <label class="form-check-label" for="keepsingnedCheck"> Armed Forces</label>
              </div>
              <div class="mb-3 text-start">
                <input type="radio" class="form-check-input" wire:model="selectedCategory" value="Police">
                <label class="form-check-label" for="keepsingnedCheck"> Police </label>
              </div>
              <div class="mb-3 text-start">
                <input type="radio" class="form-check-input" wire:model="selectedCategory" value="Fire">
                <label class="form-check-label" for="keepsingnedCheck"> Fire </label>
              </div>
              <div class="mb-3 text-start">
                <input type="radio" class="form-check-input" wire:model="selectedCategory" value="Paramedic">
                <label class="form-check-label" for="keepsingnedCheck"> Paramedic </label>
              </div>
              <div class="mb-3 text-start">
                <input type="radio" class="form-check-input" wire:model="selectedCategory" value="THW">
                <label class="form-check-label" for="keepsingnedCheck"> THW </label>
              </div>
  
               <div class="row">
                      <span>@error('selectedCategory')
                        <div class="bg-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror</span>
                  </div>
  
  
              <!-- Button -->
              <div class="d-grid"><button type="submit" class="btn btn-lg btn-primary">Sign me up</button></div>
              <!-- Copyright -->
             </form>
            <!-- Form END -->
          </div>
          <!-- Sign up END -->
        </div>
      </div>
</div>
