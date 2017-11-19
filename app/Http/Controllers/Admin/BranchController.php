<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use App\Models\Country;
use App\Models\SupportStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BranchController extends Controller
{

    public function index()
    {
        $branches = Branch::all();
        return view('admin.branch.index' , compact('branches'));
    }

    public function create()
    {
        $branch_id = Branch::getMaxBranchId();
        $staffs = SupportStaff::all();
        $related_staff = [];

        return view('admin.branch.create' , compact('branch_id' ,'staffs','related_staff'));
    }

    public  function store(Request $request)
    {
        $input = $request->all();

        $fileName = '';
        if ($request->hasFile('branch_logo')) {
            if($request->file('branch_logo')->isValid()) {
                $file = $request->file('branch_logo');
                $fileName = str_slug($input['name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('branch_logo')->move("uploads/branches", $fileName);
            }
        }
        $input['branch_logo'] = $fileName;
        $input['added_by'] = Auth::user()->id;
        $input['id_number'] = Branch::getMaxBranchId();
        unset($input['related_staff'] ,$input['branch_id']);
        $branch = Branch::create($input);

        if ($branch){
            $branch->staffs()->attach($request->related_staff);
            session()->flash('app_message', 'New Branch Has Been Added Successfully!');
        }

        return redirect()->route('branch.index');
    }

    public function edit($id)
    {
        $branch = Branch::where('branch_id', $id)->first();
        $staffs = SupportStaff::all();
        $related_staff = $branch->relatedStaff();

        if (!is_null($branch))
        {
            return view('admin.branch.edit' , compact('branch' ,'related_staff','staffs'));
        } else
        {
            session()->flash('app_warning', 'No, Branch Found!');
            return redirect()->route('branch.index');
        }
    }

    public function  update(Request $request)
    {
        $branch = Branch::find($request->branch_id);

        if (!is_null($branch)){
            $fileName = $branch->branch_logo;
            $input = $request->all();
            $input['related_staff'] = implode(',', $input['related_staff']);
            if ($request->hasFile('branch_logo')) {
                if ($request->file('branch_logo')->isValid()) {
                    $file = $request->file('branch_logo');
                    $fileName = $input['name'] . '-' . time() . '.' . $file->getClientOriginalExtension();
                    $request->file('branch_logo')->move("uploads/branches", $fileName);
                }
            }
            $input['branch_logo'] = str_slug($fileName);
            unset($input['_token'] , $input['related_staff']);
            $update = $branch->update($input);
            if ($update) {
                $branch->staffs()->sync($request->related_staff);
                session()->flash('app_message', 'Branch Has Been Updated Successfully!');
            }
            return redirect()->route('branch.index');
        }

        session()->flash('app_warning', 'No, Branch Found!');
        return redirect()->route('branch.index');
    }

    public function delete($id)
    {
        $branch = Branch::find($id);
        $branch->staffs()->detach();
        $is_delete = $branch->delete();
        if($is_delete)
            session()->flash('app_message', 'Branch Deleted Successfully!');
        else
        session()->flash('app_warning', 'Branch Not Deleted!');

        return redirect()->route('branch.index');
    }
}
