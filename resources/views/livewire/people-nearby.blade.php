<div>
   
    <div class="people-nearby ">
        <div >

          <div id="mymap" style="width:100% ; height:500px ; margin-top:1% ;margin-bottom:4%;"></div>
        </div>
        <div class="container" style="padding:0">
        @foreach ($users as $user)

        <div class="card" style="margin-bottom: 10px;">
       
            <div class="card-body">
      
              <div class="d-md-flex align-items-center mb-4">
   
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


       
      </div>
</div>

<div>
  <h1>safeer</h1>
  <div id="radar">
    <div class="beacon" id="beacon"></div>
    <div class="beacon" id="beacon-75"></div>
</div>
</div>


</div>

@section('pageScripts')
<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script>
    document.addEventListener('livewire:load', function () {
      if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
} else { 
x.innerHTML = "Geolocation is not supported by this browser.";
}
function showPosition(position) {
 
@this.currentUserLongitude= position.coords.longitude;
@this.currentUserLatiitude=position.coords.latitude;


}
        });
 
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



//   for( var i=0, dot, r, t, container=document.getElementById('radar'); i<10; i++) {
// 	dot = document.createElement('div');
//   dot.className = "object";
//   r = Math.random()*190+5;
//   t = Math.random()*Math.PI*2;
//   dot.style.left = (200+Math.cos(t)*r)+"px";
//   dot.style.top = (200+Math.sin(t)*r)+"px";
//   dot.style.animationDelay = t/Math.PI/2*5+"s";
//   container.appendChild(dot);
// }
var dot, r, t, container=document.getElementById('radar');
$.each( locations, function( index, value ){

  dot = document.createElement('a');
  dot.className = "object";
  dot.href="#";
  r = Math.random()*190+5;
  t = Math.random()*Math.PI*2;
  dot.style.left = (200+Math.cos(t)*r)+"px";
  dot.style.top = (200+Math.sin(t)*r)+"px";
  dot.style.animationDelay = t/Math.PI/2*5+"s";
  container.appendChild(dot);

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

         #radar {
    position:relative;
    width:400px;
    height:400px;
    margin:20px auto;
    background-color:#020;
    background-image:
      linear-gradient(to right, transparent 199px, #0c0 199px, #0c0 201px, transparent 201px),
      linear-gradient(to bottom, transparent 199px, #0c0 199px, #0c0 201px, transparent 201px),
      radial-gradient(circle at center,
        #0c0 4px, transparent 4px,
        transparent 49px, #0c0 49px, #0c0 50px, transparent 50px,
        transparent 99px, #0c0 99px, #0c0 100px, transparent 100px,
        transparent 149px, #0c0 149px, #0c0 150px, transparent 150px,
        transparent 198px, #0c0 198px);
    border-radius:50%;
}
#radar>* {position:absolute}
.beacon {
    left:50%;
    top:50%;
    border-style:solid;
    border-width:8px 200px 8px 0;
    border-color:transparent;
    border-right-color:#0c0;
    margin-top:-8px;
    transform-origin:0 50%;
    animation: spin 5s linear infinite;
}
#beacon-75 {opacity: 0.75; animation-delay:0.05s}


.object {
  width: 8px;
  height: 8px;
  margin: -4px;
  background-color: #0c0;
  border-radius: 4px;
  /* animation: spotted 50s linear infinite both; */
}

@keyframes spin {
    from {transform:rotate(0)}
    to {transform:rotate(360deg)}
}
@keyframes spotted {
    from {opacity:0}
    1% {opacity:1}
    40% {opacity:0}
    to {opacity:0}
}
    </style>
@endsection
 