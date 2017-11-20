<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    //

    public function create()
    {
        return view('admin.equipments.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function edit($id)
    {
        dd($id);
    }

    public function update(Request $request)
    {
        dd($request->all());
    }

    public function delete($id)
    {
        dd($id);
    }
}
