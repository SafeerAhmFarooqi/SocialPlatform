@extends('layouts.friendfinder-theme')
@section('body-content')
        @include("dashboards.user.includes.topbar")   
        <div id="page-contents">
            <div class="container">
                <div class="row">
                    @include("dashboards.user.includes.sidebarleft") 
                    @yield("page-content")  
                    @include("dashboards.user.includes.sidebarright")  
                    
            </div>
        </div>
    </div>    
        @include("dashboards.user.includes.footer")
        <div id="spinner-wrapper">
            <div class="spinner"></div>
          </div>
@endsection