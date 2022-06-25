@extends('dashboards.shop-admin.dashboard')
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
                    Home
                </b>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->

    <div class="container mb-4">
        <div class="alert alert-warning" role="alert">
            Please complete your profile by clicking
            <a href="#" class="alert-link"> here</a>.
        </div>
    </div>




    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->

        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 4-->
                    <a href="#">
                        <div class="card card-flush h-md-20 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5" style="background-color: #009ef7;">
                                <!--begin::Title-->

                                <!--begin::Info-->
                                <div class="align-items-center pt-6 pb-10">
                                    <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">Text 5</span><br>
                                    <span style="color:#fff">Total Proposals</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <i class="fa-regular fa-window"></i>
                                <span style="padding-bottom:10px;" class=""> <i style="color:#fff;font-size:70px;" class="fas fa-database"></i></span>
                                <!--end::Subtitle-->

                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--end::Card body-->
                    </a>
                </div>

                <!--end::Card widget 4-->
                <!--begin::Card widget 5-->
                <div class="card card-flush h-md-20 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card card-flush h-md-20">
                        <!--begin::Header-->
                        <a href="#">
                            <div class="card-header pt-5" style="background-color: #AC3E31;">
                                <!--begin::Title-->

                                <!--begin::Info-->
                                <div class="align-items-center pt-6 pb-10">
                                    <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">text 1</span><br>
                                    <span style="color:#fff">In Review</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fas fa-file-export"></i></span>
                                <!--end::Subtitle-->

                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                        </a>
                        <!--end::Card body-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->

                    <!--end::Card body-->
                </div>
                <!--end::Card widget 5-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-10">
                <!--begin::Card widget 4-->
                <a href="#">
                    <div class="card card-flush h-md-20 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5" style="background-color: #EA6A47;">
                            <!--begin::Title-->

                            <!--begin::Info-->
                            <div class="align-items-center pt-6 pb-10">
                                <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">Text 2</span><br>
                                <span style="color:#fff">Pending Proposals</span>
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fas fa-clipboard-list"></i></span>
                            <!--end::Subtitle-->

                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--end::Card body-->
                    </div>
                </a>
                <!--end::Card widget 4-->
                <!--begin::Card widget 5-->
                <a href="#">
                    <div class="card card-flush h-md-20 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card card-flush h-md-20">
                            <!--begin::Header-->
                            <div class="card-header pt-5" style="background-color: #B3C100;">
                                <!--begin::Title-->

                                <!--begin::Info-->
                                <div class="align-items-center pt-6 pb-10">
                                    <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">Text 3</span><br>
                                    <span style="color:#fff">Approved</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fas fa-book"></i></span>
                                <!--end::Subtitle-->

                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--end::Card body-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->

                        <!--end::Card body-->
                    </div>
                </a>
                <!--end::Card widget 5-->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-10">
                <!--begin::Card widget 4-->
                <a href="#">
                    <div class="card card-flush h-md-20 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5" style="background-color: #1a1a27;">
                            <!--begin::Title-->

                            <!--begin::Info-->
                            <div class="align-items-center pt-6 pb-10">
                                <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">Text 4</span><br>
                                <span style="color:#fff"> Rejected </span>
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fab fas fa-file"></i></span>
                            <!--end::Subtitle-->

                            <!--end::Title-->
                        </div>
                        <!--end::Header-->

                        <!--end::Card body-->
                    </div>
                </a>
                <!--end::Card widget 4-->
                <!--begin::Card widget 5-->

                <!--end::Card widget 5-->
            </div>


            <!--begin::Col-->

            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--end::Row-->
    </div>

    <!--end::Container-->
</div>
@endsection