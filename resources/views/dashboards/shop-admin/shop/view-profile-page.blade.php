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
                
               
                        Shop Dashboard
              
       
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
            @include('common.validation')
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
             
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                 
    
     
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
     
            <!--begin::Content-->
            <div class="collapse show" id="kt_account_settings_profile_details">
                <!--begin::Form-->
             
    
        <div class="card-body pt-9 pb-0" style="padding:0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                <!--begin: Pic-->
                
                <div class="me-7 mb-4">
                    <h1>Logo</h1>
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img alt="image" src="{{Auth::user()->logo?asset('storage/'.Auth::user()->logo) : asset('assets/Metronic-Theme/media/svg/avatars/blank.svg')}}">
                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                    </div>
                </div><!--end::Pic-->
                <div class="me-7 mb-4">
                    <h1>Banner</h1>
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img alt="image" src="{{Auth::user()->logo?asset('storage/'.Auth::user()->logo) : asset('assets/Metronic-Theme/media/svg/avatars/blank.svg')}}">
                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                    </div>
                </div>
             
          
            </div>
         
        </div>
     
    
    
    
    
    
    
        <div class="d-flex flex-column flex-lg-row mb-17" style="padding-top:50px">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-0 me-lg-20">
                <!--begin::Form-->
     
                       
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-5 fw-semibold mb-2">Email</label> <!--end::Label-->
                         <!--begin::Input-->
                         <input class="form-control form-control-solid" name="email" placeholder="" value="{{Auth::user()->email}}" disabled> <!--end::Input-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--end::Label-->
                        <label class="fs-5 fw-semibold mb-2">Shop Name</label> <!--end::Label-->
                         <!--end::Input-->
                         <input class="form-control form-control-solid" name="mobileno" placeholder="" type="text" value="{{Auth::user()->shopname??''}}" disabled> <!--end::Input-->
                    </div><!--end::Col-->
                </div><!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">First Name</label> <!--end::Label-->
                             <!--begin::Input-->
                             <input class="form-control form-control-solid"  placeholder="" type="text" value="{{Auth::user()->firstname??'Waiting'}}" disabled> <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div><!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="fs-5 fw-semibold mb-2">Last Name</label> <!--end::Label-->
                             <!--end::Input-->
                             <input class="form-control form-control-solid" name="last_name" placeholder="" type="text" value="{{Auth::user()->lastname??'Waiting'}}" disabled> <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div><!--end::Col-->
                    </div><!--end::Input group-->
                    <!--begin::Input group-->
                   
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--end::Label-->
                            <label class="fs-5 fw-semibold mb-2">Country</label> <!--end::Label-->
                             <!--end::Input-->
                             <input class="form-control form-control-solid" name="mobileno" placeholder="" type="text" value="{{Auth::user()->country->country??'Waiting'}}" disabled> <!--end::Input-->
                        </div><!--end::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">City</label> <!--end::Label-->
                             <!--begin::Input-->
                             <input class="form-control form-control-solid" name="email" placeholder="" value="{{Auth::user()->city??'Waiting'}}" disabled> <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div><!--end::Col-->
                        <!--begin::Col-->
                       
                    </div><!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Address</label> <!--end::Label-->
                             <!--begin::Input-->
                             <input class="form-control form-control-solid" name="email" placeholder="" value="{{Auth::user()->shop_address??'Waiting'}}" disabled> <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div><!--end::Col-->
                        <!--begin::Col-->
                   
                    </div><!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                         
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="fs-5 fw-semibold mb-2">Phone</label> <!--end::Label-->
                             <!--end::Input-->
                             <input class="form-control form-control-solid" name="city" placeholder="" type="text" value="{{Auth::user()->phone??'Waiting'}}" disabled> <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div><!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="fs-5 fw-semibold mb-2">Second Phone</label> <!--end::Label-->
                             <!--end::Input-->
                             <input class="form-control form-control-solid" name="city" placeholder="" type="text" value="{{Auth::user()->phone2??'Waiting'}}" disabled> <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div><!--end::Col-->
                    </div><!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                         <a class="btn btn-primary" id="kt_account_profile_details_submit"  href="{{route('shop.profile.show',[2])}}">Update Profile</a>
                    </div>
                     
                                 <div></div>
                </form><!--end::Form-->
                <!--begin::Job-->
             
            </div><!--end::Content-->
            <!--begin::Sidebar-->
         
        </div>
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
            </div><!--end::Content-->
        </div><!--end::Table-->
        <!--end::Card body-->
        <!--end::Products-->
     
        <!--end::Container-->
    </div>
    </div>
    </div>
    </div>



    

    <!--end::Container-->
</div>
@endsection