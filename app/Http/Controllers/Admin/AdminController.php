<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Site;
use App\Models\Country;
use App\Models\Region;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    function __construct()
    {
        $this->middleware('auth')->only('showLoginForm');
    }

    public function showLoginForm( ){
        return redirect()->route('index.dashboard');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');

    }


    public function showHome()
    {
        $user      = Auth::user()->id;
        $cities    = City::Isactive()->get();
        $regions   = Region::Isactive()->get();
        $countries = Country::Isactive()->get();
        $sites     = Site::where('added_by', $user)->get();
        return view('admin.dashboard', compact('cities', 'regions', 'countries', 'sites'));
    }

}
