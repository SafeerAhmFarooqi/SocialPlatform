<div>
   
    <div class="people-nearby ">
        <div >
          {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247476.01472843773!2d75.3083647569978!3d35.4154376421254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e46392bac10283%3A0xc2f7a786f9833d7!2sSkardu!5e0!3m2!1sen!2s!4v1665025745590!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
          <div id="mymap" style="width:100% ; height:500px ; margin-top:1% ;margin-bottom:4%;"></div>
        </div>
        <div class="container" style="padding:0">
        @foreach ($users as $user)

        <div class="card" style="margin-bottom: 10px;">
            <!-- Card header START -->
           <!--  <div class="card-header border-0 pb-0">
              <h5 class="card-title"> Connections</h5> 
            </div> -->
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
              <!-- Connections Item -->
              <div class="d-md-flex align-items-center mb-4">
                <!-- Avatar -->
                <div class="avatar me-3 mb-3 mb-md-0">
                  <a href="{{route('user.dashboard.user.information',[$user->id])}}"> <img class="avatar-img rounded-circle" src="{{$user->profile_pic_path?'storage/'.$user->profile_pic_path : asset('assets/FriendFinder-Theme/images/users/empty.jpg')}}" alt=""> </a>
                </div>
                <!-- Info -->
                <div class="w-100">
                  <div class="">
                    <a href="{{route('user.dashboard.user.information',[$user->id])}}" style="font-weight: bold;color:#333">{{$user->firstname.' '.$user->lastname}}</a>  <Br> 
                  <a href="#!" style="font-size:10px;color:#333">Police</a> 
                 </div>
   
              </div>
              <!-- Button -->
              <div class="ms-md-auto d-flex">
                <button class="btn btn-danger-soft btn-sm mb-0 me-2"> {{$this->getKmAway($user->longitude,$user->latitude)}} KM </button>
                <a href="{{route('user',[$user->id])}}" class="btn btn-primary-soft btn-sm mb-0"> Message </a>
              </div>
            </div>

        



        </div>
        <!-- Card body END -->
        </div>
  @endforeach

 {{-- <!--        <div class="nearby-user">
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
          </div> --> --}}
       
      </div>
</div>
</div>

@section('pageScripts')
<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script>
 if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
} else { 
x.innerHTML = "Geolocation is not supported by this browser.";
}
function showPosition(position) {
@this.currentUserLongitude= position.coords.longitude;
@this.currentUserLatiitude=position.coords.latitude;


}
</script>
<script>
  window.onload = function(e){ 
    var locations = @json($users);

   var mymap = new GMaps({
el: '#mymap',
lat: locations.length==0?51 :locations[0].latitude ,
lng: locations.length==0?10 :locations[0].longitude,
zoom:10
});

$.each( locations, function( index, value ){
var marker= mymap.addMarker({
  lat: value.latitude,
  lng: value.longitude,
  title: value.firstname+" "+ value.lastname,
  click: function(e) {
    let url = "{{ route('user.dashboard.user.information', ':value.id') }}";
         url = url.replace(':value.id', value.id);
         document.location.href=url;
        window.open(url,'_self');
   // alert('This is second '+value.id+', gujarat from India.');
  

  }
});

});


}



</script>

<script>
  // $(document).ready(function(){
  //     @this.name="Farooqi";
  // });






window.addEventListener('getMarker', event => {
    //alert("Hello! I am an alert box!");
    //alert('getMarker');

    var locations = @json($users);
//alert(locations[0].longitude);
var mymap = new GMaps({
el: '#mymap',
lat: locations.length==0?51 :locations[0].latitude,
lng: locations.length==0?10 :locations[0].longitude,
zoom:10
});





$.each( locations, function( index, value ){

  //alert(value.image);

var marker= mymap.addMarker({

  lat: value.latitude,
  lng: value.longitude,
  title: value.firstname+" "+ value.lastname,
  click: function(e) {
    let url = "{{ route('user.dashboard.user.information', ':value.id') }}";
         url = url.replace(':value.id', value.id);
         document.location.href=url;
        window.open(url,'_self');
   // alert('This is second '+value.id+', gujarat from India.');
  

  }
});

});




});
</script>    
@endsection

@section('pageStyles')
    <style>
      #mymap {
      		  
              width: 100%;
              height: 500px;
            margin-top: 12%;
         }
    </style>
@endsection
 