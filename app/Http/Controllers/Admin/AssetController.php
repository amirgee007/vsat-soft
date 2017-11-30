<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
    //
    public function index()
    {
        return view('admin.asset.index');
    }

    public function create()
    {
        return view('admin.asset.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function edit($id)
    {
        return view('admin.asset.edit');
    }

    public function  delete($id)
    {
        dd($id);
    }
}
