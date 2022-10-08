<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;
use App\Models\City;

class AdminCountryController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->type=='addcity') {
            $request->validate([
                //Validation Rules
                'countryname' => ['required'],
                'cityname' => ['required', 'string', 'max:100'],
                 
            ],[
                //Validation Messages
                'required'=>':attribute Is Required',
            ],[
                //Validation Attributes
                'countryname' => 'Country Name',
                'cityname' => 'City Name',
              
                 
            ]);
    
            $city=City::create([
                'country_id' => $request->countryname,
                'name' => $request->cityname,  
                'status' => true,
            ]);
    
            if($city)
            {
                return back()->with('success', 'New City Added Successfully' );
            }
            else
            {
                return back()->with('error', 'Unable to add New City' );
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        switch ($id) {
            case "1":
                $countries = Countries::orderBy('status','DESC')->get();
              return view('dashboards.shop-admin.admin.country-management-page',[
                'countries'=>$countries,
              ]);
              break;
            case "2":
                $countries = Countries::where('status',true)->orderBy('status','DESC')->get();
              return view('dashboards.shop-admin.admin.add-new-city-page',[
                'countries'=>$countries,
              ]);
                break;
            case "3":

                    return view('pay-agreement-amount-page',[
 
                    ]);
                    break;
                    case "4":

                        return view('rental-company-expenses-page');
                        break;
                        case "5":

                            return view('create-expanse-group-page');
                            break;
            default:
              return back();
          }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        if ($request->action=='disable') {
            $country=Countries::findOrFail($id);
            $country->update([
                'status' => false,
            ]);
        } else {
            $country=Countries::findOrFail($id);
            $country->update([
                'status' => true,
            ]);
        }
        

        if($country)
        {
            return back()->with('success', 'Country Status Updated Successfully' );
        }
        else
        {
            return back()->with('success', 'Unable to Update Country Status' );
        }
    }
    
}
