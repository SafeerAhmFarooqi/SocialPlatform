@extends('dashboards.shop-admin.dashboard-layout')
@section('page-content')
 

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
       @endif
        <!--begin::Products-->
        <div class="card card-flush">
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
                    <!--begin::Daterangepicker-->
                    {{-- <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_views_daterangepicker" /> --}}
                    <!--end::Daterangepicker-->
                    <!--begin::Filter-->
                    {{-- <div class="w-150px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Rating" data-kt-ecommerce-order-filter="rating">
                            <option></option>
                            <option value="all">All</option>
                            <option value="rating-5">5 Stars</option>
                            <option value="rating-4">4 Stars</option>
                            <option value="rating-3">3 Stars</option>
                            <option value="rating-2">2 Stars</option>
                            <option value="rating-1">1 Stars</option>
                        </select>
                        <!--end::Select2-->
                    </div> --}}

                    {{-- <div class="w-150px">
                        <!--begin::Select2-->
                        <a href="{{route('client.led.add')}}" class="btn btn-primary">Add New Led</a>
                        <!--end::Select2-->
                    </div> --}}
                    <!--end::Filter-->
                    <!--begin::Export dropdown-->
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
         <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fw-bold text-muted">
                                                         
                                                            <th class="min-w-150px">#</th>
                                                            <th class="min-w-140px">Details</th>
                                                            <th class="min-w-120px">Phone</th>
                                                            <th class="min-w-120px">Status</th> 
                                                            <th class="min-w-120px">Social</th> 
                                                            <th class="min-w-120px">Joined Date</th> 
                                                            <th class="min-w-120px">Verified</th> 
                                                            <th class="min-w-100px text-end">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                      @foreach ($users as $user)
                                                          <tr>
                                                            <td>
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{$user->id}}   </a>
                                                                    <br> 
                                                                    
                                                                </div>
                                                            
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{$user->firstname.' '.$user->lastname}}   </a>
                                                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$user->email}}</span>
                                                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$user->address}}</span>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$user->phone}}</a>
                                                                
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-light-success">{{$user->user_status?'Active' : 'Non Active'}}</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin.user.post.list',[$user->id])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-primary" title="Posts" ><span class="fa fa-globe"> </span></a>

                                                                <a href="{{route('admin.user.group.list',[$user->id])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-primary" title="Groups"><span class="fa fa-users"> </span></a>
                                                            </td>
                                                            <td>
                                                                {{$user->created_at->format('F d, Y')}}
                                                            </td>
                                                            <td>
                                                                {{$user->email_verified_at?$user->email_verified_at->format('F d,y') : 'Non Verified'}}
                                                            </td>
                                                          
                                                            <td class="text-end">

                                                                <form action="{{route('admin.all.users.list.delete')}}" method="post" style="float:right">
                                    @csrf
                                  <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-danger" type="submit" class="btn btn-danger" name="user_id" value="{{$user->id}}" title="delete"><span class="fa fa-trash"> </span></button>
                                </form>
                                <form action="{{route('admin.all.users.list.verify')}}" method="post" style="float:right">
                                    @csrf
                                  <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-success" type="submit" class="btn btn-icon btn-success" name="user_id" value="{{$user->id}}" title="verify"><i class="las la-wallet fs-2 me-2"></i></button>
                                </form>
                                <form action="{{route('admin.all.users.list.active')}}" method="post" style="float:right">
                                    @csrf
                                  <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-success" type="submit" class="btn btn-primary" name="user_id" value="{{$user->id}}">  <span class="fa fa-check"> </span></button>
                                </form>
                                <form action="{{route('admin.all.users.list.deactive')}}" method="post" style="float:right">
                                    @csrf
                                  <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-warning" type="submit" class="btn btn-primary" name="user_id" value="{{$user->id}}"> <span class="fa fa-ban"> </span></button>
                                </form>



                                                           
                                                             
                                                            </td>
                                                        </tr>
                                                      @endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Container-->
</div>
@endsection

@section('pageScripts')
<script src="{{asset('assets/Metronic-Theme/js/custom/apps/ecommerce/reports/views/views.js')}}"></script>
@endsection