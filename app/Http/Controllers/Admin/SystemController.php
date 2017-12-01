<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{

    public function countryCityAjax(Request $request){
        if($request->ajax()){
            $cities = City::IsActive()->where('country_id',$request->country_id)->pluck("city_name","city_id")->all();
            $sites = Site::where('country_id', $request->country_id)->select(['name', 'country_id'])->get();
            $site = view('admin.layouts.partials.ajax-site-table',compact('sites'))->render();
            $data = view('admin.layouts.partials.ajax-cities-options',compact('cities'))->render();
            return response()->json(['options'=>$data, 'sites'=>$site, 'total_sites' => count($sites)]);
        }
        return response()->json(['status:' => 401]);
    }

    public function cityAjax(Request $request){
        if($request->ajax()){
            $sites = Site::where(['country_id' => $request->country_id, 'city' => $request->city_id])->select(['name', 'country_id'])->get();
            $site = view('admin.layouts.partials.ajax-site-table',compact('sites'))->render();
            return response()->json([ 'sites'=>$site, 'total_sites' => count($sites)]);
        }
        return response()->json(['status:' => 401]);
    }


    public function regionCountryAjax(Request $request){
        if($request->ajax()){
            $countryObj = Country::IsActive()->where('region_id',$request->region_id);
            $countries = $countryObj->pluck("full_name","country_id")->all();
            $countriesIds = $countryObj->pluck("country_id")->toArray();
            $sites = Site::whereIn('country_id', $countriesIds)->select(['name', 'country_id'])->get();
            $site = view('admin.layouts.partials.ajax-site-table',compact('sites'))->render();
            $data = view('admin.layouts.partials.ajax-countries-options',compact('countries'))->render();
            return response()->json(['options'=>$data, 'sites'=>$site, 'total_sites' => count($sites)]);
        }
        return response()->json(['status:' => 401]);
    }




}
