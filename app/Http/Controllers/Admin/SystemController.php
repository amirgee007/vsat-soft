<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{

    public function countryCityAjax(Request $request){
        if($request->ajax()){
            $cities = City::IsActive()->where('country_id',$request->country_id)->pluck("city_name","city_id")->all();

            $data = view('admin.layouts.partials.ajax-cities-options',compact('cities'))->render();
            return response()->json(['options'=>$data]);
        }
    }


    public function regionCountryAjax(Request $request){
        if($request->ajax()){
            $countries = Country::IsActive()->where('region_id',$request->region_id)->pluck("full_name","country_id")->all();

            $data = view('admin.layouts.partials.ajax-countries-options',compact('countries'))->render();
            return response()->json(['options'=>$data]);
        }
    }




}
