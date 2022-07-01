<link href="{{ asset('assets/Metronic-Theme/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/Metronic-Theme/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/Metronic-Theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<link rel="preconnect" href="https://fonts.gstatic.com">
<style>
    .custom-body-class{
        @extend .header-fixed .header-tablet-and-mobile-fixed .toolbar-enabled .toolbar-fixed .aside-enabled .aside-fixed;
        --kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px;
    }
</style>
@yield('pageStyles')