@section('scripts')
<script src="{{asset('assets/ressoli-theme/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('assets/ressoli-theme/assets/vendor/tiny-slider/dist/tiny-slider.js')}}"></script>
<script src="{{asset('assets/ressoli-theme/assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js')}}"></script>
<script src="{{asset('assets/ressoli-theme/assets/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
<script src="{{asset('assets/ressoli-theme/assets/vendor/glightbox-master/dist/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/ressoli-theme/assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/ressoli-theme/assets/vendor/plyr/plyr.js')}}"></script>
<script src="{{asset('assets/ressoli-theme/assets/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('assets/ressoli-theme/assets/js/functions.js')}}"></script>
<script src="{{asset('assets/FriendFinder-Theme/js/jquery-3.1.1.min.js')}}"></script>    
@show
@yield('pageScripts')
@livewireScripts







