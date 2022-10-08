@extends('layouts.ressoli-theme')
@section('body-content')
<style>
  .bg-danger
  {
    background: #f85d7a !important;
    color: #fff;
    padding: 10px;
    font-size: 10px;
  }
</style>
<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
  
  <!-- Container START -->
  <div class="container">
    <livewire:user-register />
   <!-- Row END -->
  </div>
  <!-- Container END -->

</main>



</body>
 
</html>

@endsection

