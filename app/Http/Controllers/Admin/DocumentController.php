<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
    public function projectIndex()
    {
        return view('admin.document.project.index');
    }

    public function generalIndex()
    {
        return view('admin.document.general.index');
    }

    public function generalCreate()
    {
        return view('admin.document.general.create');
    }

    public function generalStore(Request $request)
    {
        dd($request);
    }

    public function generalEdit($id)
    {
        return view('admin.document.general.edit');
    }

    public function generalDelete($id)
    {
        dd($id);
    }

    public function specialIndex()
    {
        return view('admin.document.special.index');
    }

    public function specialCreate()
    {
        return view('admin.document.special.create');
    }

    public function specialEdit($id)
    {
        return view('admin.document.special.edit');
    }

    public function specialDelete($id)
    {
        dd($id);
    }
}
