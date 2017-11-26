<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{

    public function countryAjax(Request $request){


        if($request->ajax()){
            $cities = City::where('country_id',$request->country_id)->pluck("city_name","city_id")->all();

            $data = view('admin.layouts.partials.ajax-cities-options',compact('cities'))->render();
            return response()->json(['options'=>$data]);
        }
    }
}
