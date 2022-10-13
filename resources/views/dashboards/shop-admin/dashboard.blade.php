@extends('dashboards.shop-admin.dashboard-layout')
@section('page-content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
 
 


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->

        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->

            @role('Admin')
            
    <div class="container">     
            
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <!--begin::Card widget 3-->
                                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('../assets/media/svg/shapes/wave-bg-red.svg')">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5 mb-3">
                                                    <!--begin::Icon-->
                                                    <div class="fa fa-user d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C;color:#fff;font-size:25px">
                                                        <i class="fonticon-incoming-call text-white fs-2qx lh-0"></i>
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex align-items-end mb-3">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-4hx text-white fw-bold me-6">{{$allUsersCount}}</span>
                                                        <div class="fw-bold fs-6 text-white">
                                                            <span class="d-block">Users </span>
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Card footer-->
                                                <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                                    <!--begin::Progress-->
                                                    <div class="fw-bold text-white py-2 col-sm-6" style="float:left">
                                                        <span class="fs-1 d-block">{{$allActiveUsersCount}}</span>
                                                        <span class="opacity-50">Active </span>
                                                    </div>
                                                    <div class="fw-bold text-white py-2 col-sm-6" style="float:left;text-align: right;">
                                                        <span class="fs-1 d-block">{{$allDeactiveUsersCount}}</span>
                                                        <span class="opacity-50">De-Active </span>
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Card footer-->
                                            </div>
                                            <!--end::Card widget 3-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <!--begin::Card widget 3-->
                                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('../assets/media/svg/shapes/wave-bg-purple.svg')">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5 mb-3">
                                                    <!--begin::Icon-->
                                                    <div class="fa fa-shop d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA;color:#fff;font-size:25px">
                                                        <i class="fonticon-outgoing-call text-white fs-2qx lh-0"></i>
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex align-items-end mb-3">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-4hx text-white fw-bold me-6">{{$allShopsCount}}</span>
                                                        <div class="fw-bold fs-6 text-white">
                                                            <span class="d-block">Shops</span>
                                                             
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Card footer-->
                                                <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                                    <!--begin::Progress-->
                                                      <div class="fw-bold text-white py-2 col-sm-6" style="float:left">
                                                        <span class="fs-1 d-block">{{$allActiveShopsCount}}</span>
                                                        <span class="opacity-50">Active </span>
                                                    </div>
                                                    <div class="fw-bold text-white py-2 col-sm-6" style="float:left;text-align: right;">
                                                        <span class="fs-1 d-block">{{$allDeactiveShopsCount}}</span>
                                                        <span class="opacity-50">De-Active </span>
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Card footer-->
                                            </div>
                                            <!--end::Card widget 3-->
                                        </div>
                                        <!--end::Col-->


                                        <div class="col-xl-3">
                                            <!--begin::Card widget 3-->
                                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #22232B;background-image:url('../assets/media/svg/shapes/wave-bg-purple.svg')">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5 mb-3">
                                                    <!--begin::Icon-->
                                                    <div class="fa fa-users d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #22232B;color:#fff;font-size:25px">
                                                        <i class="fonticon-outgoing-call text-white fs-2qx lh-0"></i>
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex align-items-end mb-3">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-4hx text-white fw-bold me-6">{{$allGroupsCount}}</span>
                                                        <div class="fw-bold fs-6 text-white">
                                                            <span class="d-block">Groups</span>
                                                            
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Card footer-->
                                                <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                                    <!--begin::Progress-->
                                                    <div class="fw-bold text-white py-2 col-sm-6" style="float:left">
                                                        <span class="fs-1 d-block">{{$allActiveGroupsCount}}</span>
                                                        <span class="opacity-50">Active </span>
                                                    </div>
                                                    <div class="fw-bold text-white py-2 col-sm-6" style="float:left;text-align: right;">
                                                        <span class="fs-1 d-block">{{$allDeactiveGroupsCount}}</span>
                                                        <span class="opacity-50">De-Active </span>
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Card footer-->
                                            </div>
                                            <!--end::Card widget 3-->
                                        </div>
                                        <!--end::Col-->


                                        <div class="col-xl-3">
                                            <!--begin::Card widget 3-->
                                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #efbb1b;background-image:url('../assets/media/svg/shapes/wave-bg-purple.svg')">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5 mb-3">
                                                    <!--begin::Icon-->
                                                    <div class="fa fa-gift d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #efbb1b;color:#fff;font-size:25px">
                                                        <i class="fonticon-outgoing-call text-white fs-2qx lh-0"></i>
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex align-items-end mb-3">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-4hx text-white fw-bold me-6">{{$allVouchersCount}}</span>
                                                        <div class="fw-bold fs-6 text-white">
                                                            <span class="d-block">Vouchers</span>
                                                            
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Card footer-->
                                                <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                                    <!--begin::Progress-->
                                                    
                                                    <div class="fw-bold text-white py-2 col-sm-6" style="float:left;text-align: right;">
                                                        <span class="fs-1 d-block">{{$allUsedVouchersCount}}</span>
                                                        <span class="opacity-50">Used </span>
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Card footer-->
                                            </div>
                                            <!--end::Card widget 3-->
                                        </div>
                                        <!--end::Col-->



                                        
                                    </div>








</div>


<div class="container">

<div class="col-sm-6" style="float:left">
                                                    <!--begin::Card widget 1-->
                                                    <div class="card card-flush border-0 h-xl-100" data-theme="light" style="background-color: #22232B">
                                                        <!--begin::Header-->
                                                        <div class="card-header pt-2">
                                                            <!--begin::Title-->
                                                            <h3 class="card-title">
                                                                <span class="text-white fs-3 fw-bold me-2">Post Statistics</span>
                                                             </h3>
                                                            <!--end::Title-->
                                                            <!--begin::Toolbar-->
                                                         
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Body-->
                                                        <div class="card-body d-flex justify-content-between flex-column pt-1 px-0 pb-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-wrap px-9 mb-5">
                                                                <!--begin::Stat-->
                                                                <div class="rounded min-w-125px py-3 px-4 my-1 me-6" style="border: 1px dashed rgba(255, 255, 255, 0.15)">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="text-white fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="{{$allPostsCount}}" data-kt-countup-prefix="$" data-kt-initialized="1">{{$allPostsCount}}</div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-white opacity-50">All Posts</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="rounded min-w-125px py-3 px-4 my-1" style="border: 1px dashed rgba(255, 255, 255, 0.15)">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="text-white fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="{{$allCommentsCount}}" data-kt-initialized="1">{{$allCommentsCount}}</div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-white opacity-50">Comments</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Chart-->
                                                            <div id="kt_card_widget_1_chart" data-kt-chart-color="primary" style="height: 105px; min-height: 105px;"><div id="apexchartsk9nb7dxm" class="apexcharts-canvas apexchartsk9nb7dxm apexcharts-theme-light" style="width: 496px; height: 105px;"><svg id="SvgjsSvg1353" width="496" height="105" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1355" class="apexcharts-inner apexcharts-graphical" transform="translate(48.86666666666667, 10)"><defs id="SvgjsDefs1354"><clipPath id="gridRectMaskk9nb7dxm"><rect id="SvgjsRect1358" width="464.26666666666665" height="99" x="-29" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskk9nb7dxm"></clipPath><clipPath id="nonForecastMaskk9nb7dxm"></clipPath><clipPath id="gridRectMarkerMaskk9nb7dxm"><rect id="SvgjsRect1359" width="410.26666666666665" height="99" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1380" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1381" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1389" class="apexcharts-grid"><g id="SvgjsG1390" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1392" x1="-19.866666666666667" y1="0" x2="426.1333333333333" y2="0" stroke="false" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1393" x1="-19.866666666666667" y1="23.75" x2="426.1333333333333" y2="23.75" stroke="false" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1394" x1="-19.866666666666667" y1="47.5" x2="426.1333333333333" y2="47.5" stroke="false" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1395" x1="-19.866666666666667" y1="71.25" x2="426.1333333333333" y2="71.25" stroke="false" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1396" x1="-19.866666666666667" y1="95" x2="426.1333333333333" y2="95" stroke="false" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1391" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1398" x1="0" y1="95" x2="406.26666666666665" y2="95" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1397" x1="0" y1="1" x2="0" y2="95" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1360" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1361" class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0"><path id="SvgjsPath1365" d="M -10.156666666666666 95L -10.156666666666666 65.375Q -10.156666666666666 59.375 -4.156666666666666 59.375L 0.1566666666666663 59.375Q 6.156666666666666 59.375 6.156666666666666 65.375L 6.156666666666666 65.375L 6.156666666666666 95L 6.156666666666666 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M -10.156666666666666 95L -10.156666666666666 65.375Q -10.156666666666666 59.375 -4.156666666666666 59.375L 0.1566666666666663 59.375Q 6.156666666666666 59.375 6.156666666666666 65.375L 6.156666666666666 65.375L 6.156666666666666 95L 6.156666666666666 95z" pathFrom="M -10.156666666666666 95L -10.156666666666666 95L 6.156666666666666 95L 6.156666666666666 95L 6.156666666666666 95L 6.156666666666666 95L 6.156666666666666 95L -10.156666666666666 95" cy="59.375" cx="8.156666666666666" j="0" val="30" barHeight="35.625" barWidth="20.313333333333333"></path><path id="SvgjsPath1367" d="M 47.88142857142857 95L 47.88142857142857 11.9375Q 47.88142857142857 5.9375 53.88142857142857 5.9375L 58.194761904761904 5.9375Q 64.1947619047619 5.9375 64.1947619047619 11.9375L 64.1947619047619 11.9375L 64.1947619047619 95L 64.1947619047619 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M 47.88142857142857 95L 47.88142857142857 11.9375Q 47.88142857142857 5.9375 53.88142857142857 5.9375L 58.194761904761904 5.9375Q 64.1947619047619 5.9375 64.1947619047619 11.9375L 64.1947619047619 11.9375L 64.1947619047619 95L 64.1947619047619 95z" pathFrom="M 47.88142857142857 95L 47.88142857142857 95L 64.1947619047619 95L 64.1947619047619 95L 64.1947619047619 95L 64.1947619047619 95L 64.1947619047619 95L 47.88142857142857 95" cy="5.9375" cx="66.1947619047619" j="1" val="75" barHeight="89.0625" barWidth="20.313333333333333"></path><path id="SvgjsPath1369" d="M 105.91952380952381 95L 105.91952380952381 35.6875Q 105.91952380952381 29.6875 111.91952380952381 29.6875L 116.23285714285714 29.6875Q 122.23285714285714 29.6875 122.23285714285714 35.6875L 122.23285714285714 35.6875L 122.23285714285714 95L 122.23285714285714 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M 105.91952380952381 95L 105.91952380952381 35.6875Q 105.91952380952381 29.6875 111.91952380952381 29.6875L 116.23285714285714 29.6875Q 122.23285714285714 29.6875 122.23285714285714 35.6875L 122.23285714285714 35.6875L 122.23285714285714 95L 122.23285714285714 95z" pathFrom="M 105.91952380952381 95L 105.91952380952381 95L 122.23285714285714 95L 122.23285714285714 95L 122.23285714285714 95L 122.23285714285714 95L 122.23285714285714 95L 105.91952380952381 95" cy="29.6875" cx="124.23285714285714" j="2" val="55" barHeight="65.3125" barWidth="20.313333333333333"></path><path id="SvgjsPath1371" d="M 163.95761904761903 95L 163.95761904761903 47.5625Q 163.95761904761903 41.5625 169.95761904761903 41.5625L 174.27095238095237 41.5625Q 180.27095238095237 41.5625 180.27095238095237 47.5625L 180.27095238095237 47.5625L 180.27095238095237 95L 180.27095238095237 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M 163.95761904761903 95L 163.95761904761903 47.5625Q 163.95761904761903 41.5625 169.95761904761903 41.5625L 174.27095238095237 41.5625Q 180.27095238095237 41.5625 180.27095238095237 47.5625L 180.27095238095237 47.5625L 180.27095238095237 95L 180.27095238095237 95z" pathFrom="M 163.95761904761903 95L 163.95761904761903 95L 180.27095238095237 95L 180.27095238095237 95L 180.27095238095237 95L 180.27095238095237 95L 180.27095238095237 95L 163.95761904761903 95" cy="41.5625" cx="182.27095238095237" j="3" val="45" barHeight="53.4375" barWidth="20.313333333333333"></path><path id="SvgjsPath1373" d="M 221.99571428571429 95L 221.99571428571429 65.375Q 221.99571428571429 59.375 227.99571428571429 59.375L 232.30904761904762 59.375Q 238.30904761904762 59.375 238.30904761904762 65.375L 238.30904761904762 65.375L 238.30904761904762 95L 238.30904761904762 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M 221.99571428571429 95L 221.99571428571429 65.375Q 221.99571428571429 59.375 227.99571428571429 59.375L 232.30904761904762 59.375Q 238.30904761904762 59.375 238.30904761904762 65.375L 238.30904761904762 65.375L 238.30904761904762 95L 238.30904761904762 95z" pathFrom="M 221.99571428571429 95L 221.99571428571429 95L 238.30904761904762 95L 238.30904761904762 95L 238.30904761904762 95L 238.30904761904762 95L 238.30904761904762 95L 221.99571428571429 95" cy="59.375" cx="240.30904761904762" j="4" val="30" barHeight="35.625" barWidth="20.313333333333333"></path><path id="SvgjsPath1375" d="M 280.0338095238095 95L 280.0338095238095 29.75Q 280.0338095238095 23.75 286.0338095238095 23.75L 290.34714285714284 23.75Q 296.34714285714284 23.75 296.34714285714284 29.75L 296.34714285714284 29.75L 296.34714285714284 95L 296.34714285714284 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M 280.0338095238095 95L 280.0338095238095 29.75Q 280.0338095238095 23.75 286.0338095238095 23.75L 290.34714285714284 23.75Q 296.34714285714284 23.75 296.34714285714284 29.75L 296.34714285714284 29.75L 296.34714285714284 95L 296.34714285714284 95z" pathFrom="M 280.0338095238095 95L 280.0338095238095 95L 296.34714285714284 95L 296.34714285714284 95L 296.34714285714284 95L 296.34714285714284 95L 296.34714285714284 95L 280.0338095238095 95" cy="23.75" cx="298.34714285714284" j="5" val="60" barHeight="71.25" barWidth="20.313333333333333"></path><path id="SvgjsPath1377" d="M 338.07190476190476 95L 338.07190476190476 11.9375Q 338.07190476190476 5.9375 344.07190476190476 5.9375L 348.3852380952381 5.9375Q 354.3852380952381 5.9375 354.3852380952381 11.9375L 354.3852380952381 11.9375L 354.3852380952381 95L 354.3852380952381 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M 338.07190476190476 95L 338.07190476190476 11.9375Q 338.07190476190476 5.9375 344.07190476190476 5.9375L 348.3852380952381 5.9375Q 354.3852380952381 5.9375 354.3852380952381 11.9375L 354.3852380952381 11.9375L 354.3852380952381 95L 354.3852380952381 95z" pathFrom="M 338.07190476190476 95L 338.07190476190476 95L 354.3852380952381 95L 354.3852380952381 95L 354.3852380952381 95L 354.3852380952381 95L 354.3852380952381 95L 338.07190476190476 95" cy="5.9375" cx="356.3852380952381" j="6" val="75" barHeight="89.0625" barWidth="20.313333333333333"></path><path id="SvgjsPath1379" d="M 396.11 95L 396.11 41.625Q 396.11 35.625 402.11 35.625L 406.42333333333335 35.625Q 412.42333333333335 35.625 412.42333333333335 41.625L 412.42333333333335 41.625L 412.42333333333335 95L 412.42333333333335 95z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk9nb7dxm)" pathTo="M 396.11 95L 396.11 41.625Q 396.11 35.625 402.11 35.625L 406.42333333333335 35.625Q 412.42333333333335 35.625 412.42333333333335 41.625L 412.42333333333335 41.625L 412.42333333333335 95L 412.42333333333335 95z" pathFrom="M 396.11 95L 396.11 95L 412.42333333333335 95L 412.42333333333335 95L 412.42333333333335 95L 412.42333333333335 95L 412.42333333333335 95L 396.11 95" cy="35.625" cx="414.42333333333335" j="7" val="50" barHeight="59.375" barWidth="20.313333333333333"></path><g id="SvgjsG1363" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1364" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1366" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1368" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1370" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1372" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1374" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1376" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1378" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1362" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1399" x1="-19.866666666666667" y1="0" x2="426.1333333333333" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1400" x1="-19.866666666666667" y1="0" x2="426.1333333333333" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1401" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1402" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1403" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1388" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1356" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 52.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                                            <!--end::Chart-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card widget 1-->

                                                </div>


<div class="col-sm-6" style="float:left">
                                                    <!--begin::List widget 3-->
                                                    <div class="card card-flush h-xl-100">
                                                        <!--begin::Header-->
                                                        <div class="card-header pt-5">
                                                            <!--begin::Title-->
                                                            <h3 class="card-title align-items-start flex-column">
                                                                <span class="card-label fw-bold text-dark fs-3">Other</span>
                                                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Staticts</span>
                                                            </h3>
                                                      
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Body-->
                                                        <div class="card-body">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex align-items-center me-3">
                                                                    <!--begin::Icon-->
                                                                    <img src="../assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-3 w-30px" alt="">
                                                                    <!--end::Icon-->
                                                                    <!--begin::Section-->
                                                                    <div class="flex-grow-1">
                                                                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Post</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-6">All users Posts </span>
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                                <!--begin::Statistics-->
                                                                <div class="d-flex align-items-center w-100 mw-125px">
                                                                    <!--begin::Progress-->
                                                                    <div class="progress h-6px w-100 me-2 bg-light-success">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$allUsersPostsCount==0||$allPostsCount==0?0 : (($allUsersPostsCount/$allPostsCount)*100)}}%" aria-valuenow="{{$allUsersPostsCount}}" aria-valuemin="0" aria-valuemax="{{$allPostsCount}}"></div>
                                                                    </div>
                                                                    <!--end::Progress-->
                                                                    <!--begin::Value-->
                                                                    <span class="text-gray-400 fw-semibold">{{$allUsersPostsCount}}</span>
                                                                    <!--end::Value-->
                                                                </div>
                                                                <!--end::Statistics-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-4"></div>
                                                            <!--end::Separator-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex align-items-center me-3">
                                                                    <!--begin::Icon-->
                                                                    <img src="../assets/media/svg/brand-logos/instagram-2-1.svg" class="me-3 w-30px" alt="">
                                                                    <!--end::Icon-->
                                                                    <!--begin::Section-->
                                                                    <div class="flex-grow-1">
                                                                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Groups</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-6">All Groups Posts </span>
                                                                        <!-- <span class="text-gray-400 fw-semibold d-block fs-6">Social Media</span> -->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                                <!--begin::Statistics-->
                                                                <div class="d-flex align-items-center w-100 mw-125px">
                                                                    <!--begin::Progress-->
                                                                    <div class="progress h-6px w-100 me-2 bg-light-warning">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{$allGroupPostsCount==0||$allPostsCount==0?0 : (($allGroupPostsCount/$allPostsCount)*100)}}%" aria-valuenow="{{$allGroupPostsCount}}" aria-valuemin="0" aria-valuemax="{{$allPostsCount}}"></div>
                                                                    </div>
                                                                    <!--end::Progress-->
                                                                    <!--begin::Value-->
                                                                    <span class="text-gray-400 fw-semibold">{{$allGroupPostsCount}}</span>
                                                                    <!--end::Value-->
                                                                </div>
                                                                <!--end::Statistics-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-4"></div>
                                                            <!--end::Separator-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex align-items-center me-3">
                                                                    <!--begin::Icon-->
                                                                    <img src="../assets/media/svg/brand-logos/slack-icon.svg" class="me-3 w-30px" alt="">
                                                                    <!--end::Icon-->
                                                                    <!--begin::Section-->
                                                                    <div class="flex-grow-1">
                                                                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Comments</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-6">All users Comments </span>
                                                                     </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                                <!--begin::Statistics-->
                                                                <div class="d-flex align-items-center w-100 mw-125px">
                                                                    <!--begin::Progress-->
                                                                    <div class="progress h-6px w-100 me-2 bg-light-primary">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{$allUsersCommentsCount==0||$allCommentsCount==0?0 : (($allUsersCommentsCount/$allCommentsCount)*100)}}%" aria-valuenow="{{$allUsersCommentsCount}}" aria-valuemin="0" aria-valuemax="{{$allCommentsCount}}"></div>
                                                                    </div>
                                                                    <!--end::Progress-->
                                                                    <!--begin::Value-->
                                                                    <span class="text-gray-400 fw-semibold">{{$allUsersCommentsCount}}</span>
                                                                    <!--end::Value-->
                                                                </div>
                                                                <!--end::Statistics-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-4"></div>
                                                            <!--end::Separator-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex align-items-center me-3">
                                                                    <!--begin::Icon-->
                                                                    <img src="../assets/media/svg/brand-logos/slack-icon.svg" class="me-3 w-30px" alt="">
                                                                    <!--end::Icon-->
                                                                    <!--begin::Section-->
                                                                    <div class="flex-grow-1">
                                                                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Comments</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-6">All Groups Comments </span>
                                                                     </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                                <!--begin::Statistics-->
                                                                <div class="d-flex align-items-center w-100 mw-125px">
                                                                    <!--begin::Progress-->
                                                                    <div class="progress h-6px w-100 me-2 bg-light-primary">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{$allGroupCommentsCount==0||$allCommentsCount==0?0 : (($allGroupCommentsCount/$allCommentsCount)*100)}}%" aria-valuenow="{{$allGroupCommentsCount}}" aria-valuemin="0" aria-valuemax="{{$allCommentsCount}}"></div>
                                                                    </div>
                                                                    <!--end::Progress-->
                                                                    <!--begin::Value-->
                                                                    <span class="text-gray-400 fw-semibold">{{$allGroupCommentsCount}}</span>
                                                                    <!--end::Value-->
                                                                </div>
                                                                <!--end::Statistics-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-4"></div>
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex align-items-center me-3">
                                                                    <!--begin::Icon-->
                                                                    <img src="../assets/media/svg/brand-logos/google-icon.svg" class="me-3 w-30px" alt="">
                                                                    <!--end::Icon-->
                                                                    <!--begin::Section-->
                                                                    <div class="flex-grow-1">
                                                                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Shop Categories</a>
                                                                     </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                                <!--begin::Statistics-->
                                                                <div class="d-flex align-items-center w-100 mw-125px">
                                                                    <!--begin::Progress-->
                                                                    <div class="progress h-6px w-100 me-2 bg-light-info">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <!--end::Progress-->
                                                                    <!--begin::Value-->
                                                                    <span class="text-gray-400 fw-semibold">{{$allShopsCategoriesCount}}</span>
                                                                    <!--end::Value-->
                                                                </div>
                                                                <!--end::Statistics-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::List widget 3-->
                                                </div>



                                            </div>




 <div class="clearfix"></div>
           

            

        
                @endrole
            
                @role('Shop')
                                 <div class="row">

<div class="col-sm-7">
                                            <!--begin::Card widget 20-->
                                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5">
                                                    <!--begin::Title-->
                                                    <div class="card-title d-flex flex-column">
                                                        <!--begin::Amount-->
                                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{$shopMyVouchersCount}}</span>
                                                        <!--end::Amount-->
                                                        <!--begin::Subtitle-->
                                                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">  Vouchers</span><Br><Br><Br><Br><Br><Br><Br><Br>
                                                        <!--end::Subtitle-->
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex align-items-end pt-0">
                                                    <!--begin::Progress-->
                                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                                            <span>{{$shopMyUseVouchersCount}}  Expire</span>
                                                            <span>72%</span>
                                                        </div>
                                                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Card widget 20-->
                                          
                                        </div>



<div class="col-sm-5">
                                            <!--begin::Card widget 17-->
                                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5">
                                                    <!--begin::Title-->
<div class="card-title" style="margin: 0 auto;vertical-align: bottom;">
                                                        <!--begin::Info-->
                                                        <div class="d-flex align-items-center" style="padding-top:20%;widht:100%">
                                                            <!--begin::Currency-->
                                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                                            <!--end::Currency-->
                                                            <!--begin::Amount-->
                                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{$shopMyUseVoucherSpend}}</span>
                                                            <br>
                                                            
                                                            
                                                            <!--end::Badge-->
                                                        </div> 
                                                    </div> 
                                                </div> 
                                            </div> 
                                        </div>

 
                        </div>
                @endrole
                
            <!--begin::Col-->

            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--end::Row-->
    </div>

    <!--end::Container-->
</div>
@endsection