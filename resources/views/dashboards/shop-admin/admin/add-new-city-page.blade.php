@extends('dashboards.shop-admin.dashboard-layout')
@section('page-content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <b>
                
               
                        Admin Dashboard - Add new City
              
       
                </b>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->

    {{-- <div class="container mb-4">
        <div class="alert alert-warning" role="alert">
            Please complete your profile by clicking
            <a href="#" class="alert-link"> here</a>.
        </div>
    </div> --}}




    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->

        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            
            <div class="d-flex flex-column flex-root">
                <!--begin::Authentication - Sign-up -->
                <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
                    <!--begin::Content-->
                    
                    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                        <!--begin::Logo-->
                        
                        <!--end::Logo-->
                        <!--begin::Wrapper-->
                        <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                            @include('common.validation')
                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" method="POST" action="{{route('admin.country.store')}}">
                                @csrf
                                <!--begin::Heading-->
                                <div class="mb-10 text-center">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3">Add New City</h1>
                                    <!--end::Title-->
                                    <!--begin::Link-->
                                 
                                    <!--end::Link-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Action-->
                             
                                <!--end::Action-->
                                <!--begin::Separator-->
                                <div class="d-flex align-items-center mb-10">
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                    
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                </div>
                                <!--end::Separator-->
                                <!--begin::Input group-->
                              
                                <!--end::Input group-->
                                <!--begin::Input group-->

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Country Name</span> <i aria-label="Store of origination" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                                     <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <select aria-hidden="true" aria-label="Select Area/Mall" class="form-select form-select-solid form-select-lg fw-semibold select2-hidden-accessible" data-control="select2" data-kt-initialized="1" data-placeholder="Select Country Name" data-select2-id="select2-data-10-ewc6" name="countryname" tabindex="-1">
                                            <option data-select2-id="select2-data-12-u8ev" value="">
                                                Select Country Name
                                            </option>
                                          @foreach ($countries as $country)
                                          <option  value="{{$country->id}}">
                                            {{$country->country}}
                                        </option>
                                          @endforeach
                                        </select> 
                                        @error('countryname')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div><!--end::Col-->
                                </div>
                              
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">City Name</span> <i aria-label="Country of origination" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                                     <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Enter City Name" name="cityname" value="{{old('cityname')}}"/>
                                        @error('cityname')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div><!--end::Col-->
                                </div>
                               
                              
                              
                            
                              
                             
                              <input type="hidden" name="type" value="addcity">
                           
                            
                          
                             

                              

                             

                           
                                <!--end::Input group-->
                                <!--begin::Input group-->
                              
                                <!--end::Input group=-->
                                <!--begin::Input group-->
                              
                                <!--end::Input group-->
                                <!--begin::Input group-->
                               
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="submit"  class="btn btn-lg btn-primary">
                                        <span class="indicator-label">Add</span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                   
                    <!--end::Footer-->
                </div>
                <!--end::Authentication - Sign-up-->
            </div>
            
                
                      
        </div>
        <!--end::Row-->

        <!--end::Row-->
    </div>

    <!--end::Container-->
</div>
@endsection

@section('pageScripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'location';
    
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