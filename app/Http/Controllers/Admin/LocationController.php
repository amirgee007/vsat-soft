<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class LocationController extends Controller
{


    public function indexRegions()
    {
        $regions = Region::paginate(20);
        return view('admin.location.index-regions' , compact('regions'));
    }


    public function indexCountries()
    {
        $countries= Country::where('is_active' ,true)->paginate(20);

        return view('admin.location.index-countries' ,compact('countries'));
    }

    public function CountriesData()
    {
        $countries= Country::where('is_active' ,true)->get();

        return Datatables::of($countries)

            ->addColumn('actions', function ($countries ) {
                $actions = '<input type="checkbox" class="status"  />';
                return $actions;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function indexCities()
    {
        $cities= City::where('is_active' ,true)->paginate(20);
        return view('admin.location.index-cities' , compact('cities'));
    }


    public function updateCountryStatus(Request $request){

        $country = Country::where('country_id', $request->country_id)->first();
        $country->is_active = $request->is_active;
        $country->save();

        $cities_update = $country->cities()->update(['is_active' => $request->is_active]);
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

        $region->countries()->update(['is_active' => $request->is_active]);

        foreach ($region->countries as $country){
            $country->cities()->update(['is_active' => $request->is_active]);
        }

        return $region;
    }

}
