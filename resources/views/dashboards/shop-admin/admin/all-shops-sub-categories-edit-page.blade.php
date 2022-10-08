@extends('dashboards.shop-admin.dashboard-layout')
@section('page-content')
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <b>
            
            @role('Shop')
                    Shop Dashboard
            @endrole
            @role('Admin')
            Admin All Users Page
    @endrole
            </b>
            <!--end::Title-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Container-->
</div>

<div class="container">
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
     <div class="card mb-5 mb-xl-10">
         <!--begin::Card header-->
         <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
             <!--begin::Card title-->
             <div class="card-title m-0">
                 <h3 class="fw-bolder m-0">Edit Sub Category</h3>
             </div>
             <!--end::Card title-->
         </div>
         <!--begin::Card header-->
         <!--begin::Content-->
         <div id="kt_account_settings_profile_details" class="collapse show">
             <!--begin::Form-->
             <form id="kt_account_profile_details_form" class="form" method="POST" action="{{route('admin.all.shops.subcategories.edit')}}">
                 @csrf
                 <!--begin::Card body-->
                 <div class="card-body border-top p-9">
                     <!--begin::Input group-->
                     <div class="row mb-6">
                         <!--begin::Label-->
                         <label class="col-lg-4 col-form-label required fw-bold fs-6">Sub Category</label>
                         <!--end::Label-->
                         <!--begin::Col-->
                         <div class="col-lg-8 fv-row">
                             <input type="text" name="sub_category" class="form-control form-control-lg form-control-solid" placeholder="Category" value="{{old('sub_category')?old('sub_category') : $subCategory->name}}" />
                             @error('sub_category')
                             <div class="alert alert-danger">
                                     {{$message}}
                             </div>
                             @enderror
                         </div>
                        
                         <!--end::Col-->
                     </div>                    
                 </div>
                 <!--end::Card body-->
                 <!--begin::Actions-->
                 <div class="card-footer d-flex justify-content-end py-6 px-9">
                     <a href="{{route('dashboard')}}" class="btn btn-light btn-active-light-primary me-2">Dashboard</a>
                     <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                     <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit" name="sub_category_id" value="{{$subCategory->id}}">Save Changes</button>
                 </div>
                 <!--end::Actions-->
             </form>
             <!--end::Form-->
         </div>
         <!--end::Content-->
     </div>


     
 
 </div>



@endsection

@section('pageScripts')

@endsection