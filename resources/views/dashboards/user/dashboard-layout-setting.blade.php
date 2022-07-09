@extends('layouts.friendfinder-theme')
@section('body-content')
        @include("dashboards.user.includes.topbar")   
        <div class="container">
            <div class="timeline">
                @include("dashboards.user.includes.setting-top-cover") 
                <div id="page-contents">
                    <div class="row">
                        @include("dashboards.user.includes.setting-sidebarleft")
                        @yield("page-content")  
                        @include("dashboards.user.includes.setting-sidebarright")
                    </div>
                </div>
            </div>
        </div>
        @include("dashboards.user.includes.footer")
        <div id="spinner-wrapper">
            <div class="spinner"></div>
          </div>    
@endsection