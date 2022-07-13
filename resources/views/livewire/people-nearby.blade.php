<div wire:poll>
    {{-- The whole world belongs to you. --}}
    <div class="people-nearby">
        <div class="google-maps">
          <div id="map" class="map"></div>
        </div>
        @foreach ($users as $user)
        <div class="nearby-user">
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <img src="{{$user->profile_pic_path?'storage/'.$user->profile_pic_path : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt="user" class="profile-photo-lg" />
              </div>
              <div class="col-md-7 col-sm-7">
                <h5><a href="#" class="profile-link">{{$user->firstname.' '.$user->lastname}}</a></h5>
                <p>Software Engineer</p>
                <p class="text-muted">{{$this->getKmAway($user->longitude,$user->latitude)}} Km away</p>
              </div>
              <div class="col-md-3 col-sm-3">
                <button class="btn btn-primary pull-right">Add Friend</button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
</div>

@section('pageScripts')
<script src="http://maps.google.com/maps/api/js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>

<script>
    window.onload = function(e){ 
     
     if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else { 
  x.innerHTML = "Geolocation is not supported by this browser.";
}
}

function showPosition(position) {
    @this.currentUserLongitude= position.coords.longitude;
    @this.currentUserLatiitude=position.coords.latitude;
 
   
     }

     window.addEventListener('getLocation', event => {
          //alert("Hello! I am an alert box!");
     
     if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else { 
  x.innerHTML = "Geolocation is not supported by this browser.";
}

function showPosition(position) {
    @this.currentUserLongitude= position.coords.longitude;
    @this.currentUserLatiitude=position.coords.latitude;
 
   
     }
   
})

window.addEventListener('getMarker', event => {
          //alert("Hello! I am an alert box!");
     
          var locations = event.detail.name;
     //var locations = @json($coordinates);

var mymap = new GMaps({
  el: '#map',
  lat: 50.3569,
lng: 7.5890,
zoom:6
});


$.each( locations, function( index, value ){
    // increment_2++;
    mymap.addMarker({
    //   lat: value.lat,
    //   lng: value.lng,
    lat: value.lat,
  lng: value.long,
      title: value.title,
      click: function(e) {
       
      },
    });
});
})

</script>




  <script type="text/javascript">
    var locations = @json($coordinates);
   var mymap = new GMaps({
     el: '#map',
     lat: 50.3569,
 lng: 7.5890,
 zoom:6
   });

   $.each( locations, function( index, value ){
       // increment_2++;
       mymap.addMarker({
       //   lat: value.lat,
       //   lng: value.lng,
       lat: value.lat,
     lng: value.long,
         title: value.title,
         click: function(e) {
          
         },
       });
  });

 </script>
@endsection
