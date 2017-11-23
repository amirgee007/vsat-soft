<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestCasesController extends Controller
{
    public function index()
    {
        return view('admin.log.test-cases.index');
    }
}
