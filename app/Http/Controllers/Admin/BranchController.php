<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{

    public function index()
    {
        return view('admin.branch.index' , compact('branches'));
    }

}
