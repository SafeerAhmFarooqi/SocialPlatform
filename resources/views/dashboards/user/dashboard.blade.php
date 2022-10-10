@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-8 col-lg-6 vstack gap-4">
  <livewire:post-listing/> 
 </div>
@endsection

@section('pageStyles')
<style type="text/css">
  .custom-search {
  position: relative;
  
}
.custom-search-input {
  width: 100%;
  border: 1px solid #ccc;
 
  padding: 10px 100px 10px 20px; 
  line-height: 1;
  box-sizing: border-box;
  outline: none;
}
.custom-search-botton {
  position: absolute;
  right: 3px; 
  top: 3px;
  bottom: 3px;
  border: 0;
  background: #0f74f6;
  color: #fff;
  outline: none;
  margin: 0;
  padding: 0 10px;
  border-radius: 100px;
  z-index: 2;
}
.p-3 {
    padding: 5px 15px 0px 15px !important;
}
</style>
@endsection