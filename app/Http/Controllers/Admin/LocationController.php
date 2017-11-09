<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{


    public function indexRegions()
    {
        $regions = Region::paginate(20);
        return view('admin.location.index-regions' , compact('regions'));
    }


    public function indexCountries()
    {

        $countries= Country::paginate(20);

        return view('admin.location.index-countries' , compact('countries'));
    }

    public function indexCities()
    {
        $cities= City::paginate(20);

        return view('admin.location.index-cities' , compact('cities'));
    }


    public function updateCountryStatus(Request $request){

        $country = Country::where('country_id', $request->country_id)->first();
        $country->is_active = $request->is_active;
        $country->save();

        return $country;
    }

    public function updateCityStatus(Request $request){

        $city = City::where('city_id', $request->city_id)->first();
        $city->is_active = $request->is_active;
        $city->save();

        return $city;
    }

    public function updateRegionStatus(Request $request){

        $region = Region::where('region_id', $request->region_id)->first();
        $region->is_active = $request->is_active;
        $region->save();

        return $region;
    }

}
