<div>
    <div class="d-flex flex-column flex-root">
       
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
           
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
               
                <!--begin::Logo-->
              <a href="/" class="mb-12" style="text-align:center">
                    <img alt="Logo" src="{{asset('assets/ressoli-theme/assets/resolilogoshop.png')}}" class="col-sm-4" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    @include('common.validation')
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" wire:submit.prevent="submit">
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Create an Account</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Already have an account?
                            <a href="{{route('landing')}}" class="link-primary fw-bolder">Sign in here</a></div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Action-->
                        {{-- <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Sign in with Google</button> --}}
                        <!--end::Action-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6">Shop Name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Shop Name" wire:model="shopName"/>
                                @error('shopName')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                           
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" wire:model="email"  />
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" wire:model="password"  />
                                    @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group-->
                        
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Countries</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select  class="form-select form-select-lg form-select-solid"  wire:model="selectedCountry">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->country}}</option>    
                                @endforeach
                                
                            </select>
                            @error('selectedCountry')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <!--end::Input-->
                        </div>

                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">City</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="business_type" class="form-select form-select-lg form-select-solid"  wire:model="selectedCity">
                                <option value="">Select City</option>
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>    
                                @endforeach
                                
                                
                            </select>
                            @error('selectedCity')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <!--end::Input-->
                        </div>
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6">Address</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Shop Address" wire:model="address" id="address"/>
                                @error('address')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                           
                            <!--end::Col-->
                        </div>
    
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Shop Category : {{$selectedCategory}}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select  class="form-select form-select-lg form-select-solid"  wire:model="selectedCategory">
                                <option value="">Select Category</option>
                                @foreach ($shopCategories as $shopCategory)
                                <option value="{{$shopCategory->id}}">{{$shopCategory->name}}</option>    
                                @endforeach
                                
                            </select>
                            @error('selectedCategory')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <!--end::Input-->
                        </div>

                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Sub Category : {{$selectedSubCategory}}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="business_type" class="form-select form-select-lg form-select-solid"  wire:model="selectedSubCategory">
                                <option value="">Select Sub Category</option>
                                @foreach ($shopSubCategories as $shopSubCategory)
                                <option value="{{$shopSubCategory->id}}">{{$shopSubCategory->name}}</option>    
                                @endforeach
                                
                                
                            </select>
                            @error('selectedSubCategory')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <!--end::Input-->
                        </div>

                     

                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Phone</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Phone Number" wire:model="phone" />
                            @error('phone')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        {{-- <div class="fv-row mb-10">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                            </label>
                        </div> --}}
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="submit"  class="btn btn-lg btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
          
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
</div>

@section('pageScripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'address';
    
        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode']
               
            });
        
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
            });
        });
</script>
@endsection
