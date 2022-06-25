<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('master-head')
        @include('app-master-elements.master-head')    
        @show
        @yield('theme-head')
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        @yield('theme-content')
        @yield('theme-script')
        @section('master-script')
        @include('app-master-elements.master-script')    
        @show
    </body>
</html>
