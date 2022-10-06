@extends('layouts.ressoli-theme')
@section('body-content')
        @include("dashboards.user.includes.topbar")   
        <main style="padding:0">
            <!-- Container START -->
  <livewire:people-nearby />
          
          </main>
          <!-- **************** MAIN CONTENT END **************** -->
          
          <!-- Main Chat START -->
          {{-- @include('dashboards.user.includes.chat') --}}
           <!-- Main Chat END -->
          
          <!-- Modal create Feed START -->
          {{-- @include('dashboards.user.includes.modals') --}}

     
@endsection