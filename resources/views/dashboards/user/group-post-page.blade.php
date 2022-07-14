@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-7">

  <livewire:publish-post :groupId="$id"/>

  <livewire:post-listing :groupId="$id"/>

</div>
@endsection