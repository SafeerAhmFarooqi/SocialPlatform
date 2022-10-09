@extends('dashboards.shop-admin.dashboard-layout')
@section('page-content')
 

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
                 <h3 class="fw-bolder m-0">Edit Category</h3>
             </div>
             <!--end::Card title-->
         </div>
         <!--begin::Card header-->
         <!--begin::Content-->
         <div id="kt_account_settings_profile_details" class="collapse show">
             <!--begin::Form-->
             <form id="kt_account_profile_details_form" class="form" method="POST" action="{{route('admin.all.shops.categories.edit')}}" enctype="multipart/form-data">
                 @csrf
                 <!--begin::Card body-->
                 <div class="card-body border-top p-9">
                     <!--begin::Input group-->
                     <div class="row mb-6">
                         <!--begin::Label-->
                         <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                         <!--end::Label-->
                         <!--begin::Col-->
                         <div class="col-lg-8 fv-row">
                             <input type="text" name="category" class="form-control form-control-lg form-control-solid" placeholder="Category" value="{{old('category')?old('category') : $category->name}}" />
                             @error('category')
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
                     <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit" name="category_id" value="{{$category->id}}">Save Changes</button>
                 </div>
                 <!--end::Actions-->
             </form>
             <!--end::Form-->
         </div>
         <!--end::Content-->
     </div>


     
 
 </div>

 <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
       @endif
        <!--begin::Products-->
        <div  class="card card-flush">
            <div class="card-title m-10">
                <h3 class="fw-bolder m-0">Sub Categories</h3>
            </div>
        </div>
        <div class="card card-flush  mb-5 mb-xl-10">
            
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                
                <!--begin::Card title-->
                
                <div class="card-title">
                    
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
                    </div>
                    <!--end::Search-->
                    <!--begin::Export buttons-->
                    <div id="kt_ecommerce_report_views_export" class="d-none"></div>
                    <!--end::Export buttons-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    
                    <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Add Sub Category</a>
                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
                            <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
                            <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Export Report</button>
                    <!--begin::Menu-->
                    <div id="kt_ecommerce_report_views_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Export dropdown-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-150px">#</th>
                            <th class="min-w-150px">  Name</th>  
                            <th class="text-start min-w-100px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                        <!--begin::Table row-->
                        @foreach ($category->subCategory as $subCategory)
                        <tr>
                            <!--begin::Product=-->
                            <td class="text-start">
                                <span class="fw-bolder">{{++$srNo}}</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin::Thumbnail-->
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="{{route('admin.all.shops.subcategories.edit.page',$subCategory->id)}}" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">{{$subCategory->name??''}}</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Product=-->
                            
                      
                           
                        
                            <td class="text-end pe-0">
                                <div class="rating justify-content-end">
                                    {{-- <a class="btn btn-primary" href="{{route('client.led.edit',$client->id)}}">Edit</a> --}}
                                <form action="{{route('admin.all.shops.subcategories.delete')}}" method="post" style="float:right">
                                    @csrf
                                  <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-danger" type="submit" class="btn btn-danger" name="sub_category_id" value="{{$subCategory->id}}"><span class="fa fa-trash"> </span></button>
                                  <input type="hidden" name="status" value="deactive">
                                </form>
                                <form action="{{route('admin.all.shops.subcategories.delete')}}" method="post" style="float:right">
                                    @csrf
                                  <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-success" type="submit" class="btn btn-success" name="sub_category_id" value="{{$subCategory->id}}"><span class="fa fa-check"> </span></button>
                                  <input type="hidden" name="status" value="active">
                                </form>
                                <a href="{{route('admin.all.shops.subcategories.edit.page',$subCategory->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-warning" ><span class="fa fa-pencil"> </span></a>
                                {{-- <button type="submit" class="btn btn-primary" name="client_id" value="{{$city->id}}">Edit</button> --}}
                                </div>
                                
                            </td>
                            <!--end::Percent=-->
                        </tr>
                        @endforeach
                        
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        
                        <!--end::Table row-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Container-->
</div>

<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{route('admin.all.shops.subcategories.create')}}" id="kt_modal_new_address_form" method="POST">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <!--begin::Modal title-->
                    <h2>Add New Sub Category</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                      
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">Sub Category Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="Sub Category Name" name="name" />
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <!--end::Input-->
                        </div>
                        
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Reset</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary" name="category_id" value="{{$category->id}}">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
@endsection

@section('pageScripts')
<script src="{{asset('assets/Metronic-Theme/js/custom/apps/ecommerce/reports/views/views.js')}}"></script>
@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
         $('#kt_modal_new_address').modal('show');
    });
</script>
@endif
@endsection