@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-7">

  <livewire:publish-post />

  <livewire:people-nearby />

</div>
@endsection