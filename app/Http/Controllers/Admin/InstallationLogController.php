<?php

namespace App\Http\Controllers\Admin;

use App\Models\Asset;
use App\Models\Branch;
use App\Models\Country;
use App\Models\InstallationLog;
use App\Models\Site;
use App\Models\SupportStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InstallationLogController extends Controller
{

    public function index()
    {
        $installationLogs = InstallationLog::all();
        return view('admin.log.installation-log.index' ,compact('installationLogs'));
    }

    public function show()
    {
        return view('admin.log.installation-log.index');
    }

    public function create()
    {
        //////All countries cities will be ID based after deciding the loc tables
        $branches = Branch::all();
        $assets = Asset::all();
        $staffs = SupportStaff::all();
        $sites =  Site::all();
        $countries = Country::Isactive()->get();
        $selected_branches = [] ;
        $selected_staffs = [] ;
        $job_number = InstallationLog::getMaxJobNumber();
        return view('admin.log.installation-log.create' ,compact('job_number','branches' ,'assets' ,'sites' ,'staffs' ,'selected_staffs' ,'selected_branches', 'countries'));
    }

    public function store(Request $request)
    {
        $input = $request->except('_token' ,'installation_log_id' ,'related_branches' ,'related_staff');

        $input['added_by'] = Auth::user()->id;
        $input['job_number'] = InstallationLog::getMaxJobNumber();
        $inst_log = InstallationLog::create($input);

        ////////////////////////logic for pivot table extra columns

        $sync_data = [];

        if ($inst_log){
            $inst_log->staffs()->attach($request->related_staff);
            $inst_log->branches()->attach($request->related_branches);
            $inst_log->assets()->attach($sync_data);
            session()->flash('app_message', 'New installation Log Has Been Added Successfully!');
        }

        return redirect()->route('log.installation.index');

    }

    public function edit($id)
    {
        $branches = Branch::all();
        $assets = Asset::all();
        $staffs = SupportStaff::all();
        $sites =  Site::all();
        $countries = Country::Isactive()->get();
        $installation_log = InstallationLog::where('installation_log_id' ,$id)->first();
        $selected_branches = $installation_log->relatedBranches();
        $selected_staffs = $installation_log->relatedStaffs();

        if (!is_null($installation_log)){
            return view('admin.log.installation-log.edit' ,compact(  'selected_staffs','countries','selected_branches','installation_log','branches' ,'assets' ,'sites' ,'staffs'));
        }
        else{
            session()->flash('app_warning', 'No, Installation log Found!');
            return back();
        }
    }

    public function update(Request $request)
    {
        $installation_log = InstallationLog::find($request->installation_log_id);
        $input = $request->except('_token' ,'installation_log_id' ,'related_branches' ,'related_staff');

        $installation_log->update($input);

        if ($installation_log ){
            $installation_log ->staffs()->sync($request->related_staff);
            $installation_log ->branches()->sync($request->related_branches);
            session()->flash('app_message', 'Installation Log Has Been update Successfully!');
        }

        return redirect()->route('log.installation.index');
    }

    public function delete($id)
    {
        $log = InstallationLog::find($id);
        $log ->staffs()->detach();
        $log ->branches()->detach();
        $log ->assets()->detach();
        $is_delete = $log->delete();
        if($is_delete)
            session()->flash('app_message', 'Installation Log Deleted Successfully!');
        else
            session()->flash('app_warning', 'Installation Log Not Deleted!');

        return redirect()->route('log.installation.index');
    }
}
