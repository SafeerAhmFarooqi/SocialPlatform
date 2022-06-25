<link href="{{ asset('assets/Metronic-Theme/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/Metronic-Theme/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/Metronic-Theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<style>
    .custom-body-class{
        @extend .header-fixed .header-tablet-and-mobile-fixed .toolbar-enabled .toolbar-fixed .aside-enabled .aside-fixed;
        --kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px;
    }
</style>
@yield('pageStyles')