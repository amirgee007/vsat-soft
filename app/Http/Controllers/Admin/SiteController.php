<?php

namespace App\Http\Controllers\Admin;

use  App\Models\Site;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function index()
    {
        return view('admin.site.index');
    }

    public function create()
    {
        $data['site_no'] = Site::max('site_id')+1;
        $data['countries'] = '';
        $data['branches'] = Branch::where('added_by', Auth::user()->id)->get(['branch_id', 'name']);
        return view('admin.site.create', compact('data'));
    }

    public function add(Request $request)
    {
        dd($request->all());
    }

    public function edit()
    {
        return view('admin.site.edit');
    }
}
