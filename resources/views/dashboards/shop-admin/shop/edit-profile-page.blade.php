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
            <div aria-controls="kt_account_profile_details" aria-expanded="true" class="card-header border-0 cursor-pointer" data-bs-target="#kt_account_profile_details" data-bs-toggle="collapse" role="button">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Profile Details</h3>
                </div><!--end::Card title-->
            </div><!--begin::Card header-->
            <!--begin::Content-->
            <livewire:edit-shop-profile />
           
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