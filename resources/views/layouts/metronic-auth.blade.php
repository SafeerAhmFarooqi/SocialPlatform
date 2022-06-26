@extends('layouts.metronic-theme')
@section('body-content')
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/Metronic-Theme/media/illustrations/sketchy-1/14.png">
        <!--begin::Content-->
        @yield("page-content")
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="/" class="text-muted text-hover-primary px-2">Home</a>
                <a href="#" class="text-muted text-hover-primary px-2">About</a>
                <a href="#" class="text-muted text-hover-primary px-2">Contact Us</a>

            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
@endsection