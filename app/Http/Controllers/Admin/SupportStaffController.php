<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportStaffController extends Controller
{
    public function index()
    {
        return view('admin.people.support-staff.index');
    }

    public function createStaff()
    {
        return view('admin.people.support-staff.create');
    }
    public function editStaff()
    {
        return view('admin.people.support-staff.edit');
    }
}
