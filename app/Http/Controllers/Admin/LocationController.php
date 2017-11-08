<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{


    public function indexRegions()
    {
        $regions = '';
        return view('admin.location.index-regions' , compact('regions'));
    }


    public function indexCountries()
    {

        $countries= Country::paginate(15);;

        return view('admin.location.index-countries' , compact('countries'));
    }

    public function indexCities()
    {
        $cities = '';
        return view('admin.location.index-cities' , compact('cities'));
    }

    public function updateStatus(Request $request){

        $country = Country::where('country_id', $request->country_id)->first();
        $country->is_active = $request->is_active;
        $country->save();

        return $country;
    }




}
