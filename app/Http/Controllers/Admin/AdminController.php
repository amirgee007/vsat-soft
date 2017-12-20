<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use App\Models\Ticket;
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
        $stock     =  \App\Service\HttpRequest::get('http://stock.seersol.com/vsat/v1/api/stock_value');
        $stock_value = $stock['stock_value'];
        $user      = Auth::user()->id;
        $cities    = City::Isactive()->get();
        $regions   = Region::Isactive()->get();
        $countries = Country::Isactive()->get();
        $tickets   = Ticket::all();
        $sites     = Site::where('added_by', $user)->get();
        return view('admin.dashboard', compact('cities', 'tickets', 'stock_value','regions', 'countries', 'sites'));
    }

}
