<?php

namespace App\Http\Controllers\Admin;

use App\Models\Asset;
use App\Models\Branch;
use App\Models\Country;
use App\Models\MaintenanceLog;
use App\Models\Site;
use App\Models\SupportStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MaintenanceLogController extends Controller
{
    public function index()
    {
        $maintenance_logs = MaintenanceLog::all();
        return view('admin.log.maintenance-log.index' ,compact('maintenance_logs'));
    }

    public function create()
    {
        $branches = Branch::all();
        $assets = Asset::all();
        $staffs = SupportStaff::all();
        $sites =  Site::all();
        $countries = Country::Isactive()->get();
        $job_number = MaintenanceLog::getMaxJobNumber();
        return view('admin.log.maintenance-log.create' ,compact('job_number', 'countries','branches' ,'assets' ,'sites' ,'staffs' ,'selected_staffs' ,'selected_branches'));
    }

    public function store(Request $request)
    {

        $input = $request->except('_token' ,'maintenance_log_id' ,'related_branches' ,'related_staff');

        $input['added_by'] = Auth::user()->id;
        $input['job_number'] = MaintenanceLog::getMaxJobNumber();
        $main_log = MaintenanceLog::create($input);

        ////////////////////////logic for pivot table extra columns
        $maintenence_log_assets = $request->related_assets;
        $maintenence_log_assets_qty = $request->related_assets_qty;

        $sync_data = [];
        for($i = 0; $i < count($maintenence_log_assets); $i++)
            $sync_data[$maintenence_log_assets[$i]] = ['quantity' => $maintenence_log_assets_qty[$i]];

        if ($main_log){
            $main_log->staffs()->attach($request->related_staff);
            $main_log->branches()->attach($request->related_branches);
            $main_log->assets()->attach($sync_data);
            session()->flash('app_message', 'New Maintenance Log Has Been Added Successfully!');
        }

        return redirect()->route('log.maintenance.index');

    }

    public function edit($id)
    {
        $branches = Branch::all();
        $assets = Asset::all();
        $staffs = SupportStaff::all();
        $sites =  Site::all();
        $countries = Country::Isactive()->get();
        $maintenance_log = MaintenanceLog::where('maintenance_log_id' ,$id)->first();
        $selected_branches = $maintenance_log->relatedBranches();
        $selected_staffs = $maintenance_log->relatedStaffs();

        if (!is_null($maintenance_log)){
            return view('admin.log.maintenance-log.edit' ,compact(  'countries','selected_staffs','selected_branches','maintenance_log','branches' ,'assets' ,'sites' ,'staffs'));
        }
        else{
            session()->flash('app_warning', 'No, Maintenance log Found!');
            return back();
        }
    }

    public function update(Request $request)
    {
        $maintenance_log = MaintenanceLog::find($request->maintenance_log_id);
        $input = $request->except('_token' ,'maintenance_log_id' ,'related_branches' ,'related_staff');

        $maintenance_log->update($input);

        if ($maintenance_log ){
            $maintenance_log ->staffs()->sync($request->related_staff);
            $maintenance_log ->branches()->sync($request->related_branches);
            session()->flash('app_message', 'Maintenance Log Has Been update Successfully!');
        }

        return redirect()->route('log.maintenance.index');
    }

    public function delete($id)
    {
        $log = MaintenanceLog::find($id);
        $log ->staffs()->detach();
        $log ->branches()->detach();
        $log ->assets()->detach();
        $is_delete = $log->delete();
        if($is_delete)
            session()->flash('app_message', 'Maintenance Log Deleted Successfully!');
        else
            session()->flash('app_warning', 'Maintenance Log Not Deleted!');

        return redirect()->route('log.maintenance.index');
    }
}
