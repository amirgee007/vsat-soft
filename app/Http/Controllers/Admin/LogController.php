<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public function indexInstLog()
    {
        return view('admin.log.installation_log.index');
    }

    public function createInstLog()
    {
        return view('admin.log.installation_log.create');
    }

    public function storeInstLog(Request $request)
    {
        dd($request->all());
    }

    public function editInstLog($id)
    {
        return view('admin.log.installation_log.edit');
    }

    public function updateInstLog(Request $request)
    {
        dd($request->all());
    }

    public function deleteInstLog($id)
    {
        dd($id);
    }

    public function IndexMainLog()
    {
        return view('admin.log.maintenance_log.index');
    }

    public function createMainLog()
    {
        return view('admin.log.maintenance_log.create');
    }

    public function storeMainLog(Request $request)
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

    public function testCase()
    {
        return view('admin.log.test_cases.index');
    }
}
