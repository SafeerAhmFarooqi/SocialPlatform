<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PeopleNearby extends Component
{
    public $currentUserLongitude=0;
    public $currentUserLatiitude=0;
    public $differenceKm=0;
    public $coordinates=[];

    public function dehydrate()
    {
        // $this->dispatchBrowserEvent('getLocation');
         $this->dispatchBrowserEvent('getMarker',['name'=>$this->coordinates]);
    }

    public function getKmAway($longitude,$latitude)
    {
        $mylat=$this->currentUserLatiitude;
        $mylong=$this->currentUserLongitude;
        
        $pi80 = M_PI / 180;
          $mylat *= $pi80;
          $mylat1=$mylat;
            $mylong *= $pi80;
            $mylong1 =$mylong;
         
            $userlat= $latitude;
        
         $userlon=$longitude;
           
         $mylat;
           $mylong;
           
        
        
            $userlat *= $pi80;
            $userlon *= $pi80;
        error_reporting(0);
        ini_set('display_errors', 0);
        
            $r = 6372.797; 
            $dlat = $userlat - $mylat1;
            $dlon = $userlon - $mylong1;
            $a = sin($dlat / 2) * sin($dlat / 2) + cos($mylat1) * cos($userlat) * sin($dlon / 2) * sin($dlon / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
            return (int)$km = $r * $c;
    }

    public function updateCurrentUserLocation()
    {
        $user=User::find(Auth::user()->id);
        if(Auth::user()->longitude!=$this->currentUserLongitude || Auth::user()->latitude!=$this->currentUserLatiitude)
        {
               $user->longitude=$this->currentUserLongitude;
               $user->latitude=$this->currentUserLatiitude;
               $user->update();
        }
        
    }

    public function geoLocate($address,$id=null)
    {
        try {
            $lat = 0;
            $lng = 0;
    
            $data_location = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI&address=".str_replace(" ", "+", $address)."&sensor=false";
            $data = file_get_contents($data_location);
            usleep(200000);
            // turn this on to see if we are being blocked
            // echo $data;
            $data = json_decode($data);
            if ($data->status=="OK") {
                $lat = $data->results[0]->geometry->location->lat;
                $lng = $data->results[0]->geometry->location->lng;
    
                if($lat && $lng) {
                    return array(
                        'status' => true,
                        'lat' => $lat, 
                        'long' => $lng,
                        'id'=>$id, 
                        'google_place_id' => $data->results[0]->place_id
                    );
                }
            }
            if($data->status == 'OVER_QUERY_LIMIT') {
                return array(
                    'status' => false, 
                    'message' => 'Google Amp API OVER_QUERY_LIMIT, Please update your google map api key or try tomorrow'
                );
            }
    
        } catch (Exception $e) {
    
        }
    
        return array('lat' => null, 'long' => null, 'status' => false);
    }

    public function render()
    {
        $users=User::where('id','!=',Auth::user()->id)
        ->where('user_status',true)
        ->orderBy('created_at','desc')
        ->get();
        $this->updateCurrentUserLocation();
        return view('livewire.people-nearby',[
            'users'=>$users,
        ]);
    }
}
