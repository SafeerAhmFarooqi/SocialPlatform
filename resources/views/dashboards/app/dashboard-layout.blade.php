@extends('layouts.ressoli-theme')
@section('body-content')
<header class="navbar-dark navbar-transparent header-static">
   @include('dashboards.app.includes.topbar')  
  </header>
  <main> 
    @include('dashboards.app.includes.hero')
  @yield('page-content')
  </main>
  @include('dashboards.app.includes.footer')
@endsection