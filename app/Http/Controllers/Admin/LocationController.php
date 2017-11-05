<?php

namespace App\Http\Controllers\Admin;

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
        $countries= '';
        return view('admin.location.index-countries' , compact('countries'));
    }

    public function indexCities()
    {
        $cities = '';
        return view('admin.location.index-cities' , compact('cities'));
    }

}
