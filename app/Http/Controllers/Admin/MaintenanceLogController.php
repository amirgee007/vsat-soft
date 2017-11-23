<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaintenanceLogController extends Controller
{
    public function IndexMainLog()
    {
        return view('admin.log.maintenance-log.index');
    }

    public function createMainLog()
    {
        return view('admin.log.maintenance-log.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function editMainLog($id)
    {
        return view('admin.log.maintenance_log.edit');
    }

    public function updateMainLog(Request $request)
    {
        dd($request->all());
    }

    public function deleteMainLog($id)
    {
        dd($id);
    }
}
