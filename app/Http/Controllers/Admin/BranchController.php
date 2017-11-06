<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BranchController extends Controller
{

    public function index()
    {
        $branches = new Branch();
        $branches = $branches::all();
        return view('admin.branch.index' , compact('branches'));
    }

    public function create()
    {
        $branches = '';
        return view('admin.branch.create' , compact('branches'));
    }

    public  function new_branch(Request $request)
    {
        $input = (object)$request->all();
        $fileName = null;
        if ($request->hasFile('b_logo')) {
            if($request->file('b_logo')->isValid()) {
                $file = $request->file('b_logo');
                $fileName = $input->b_name.'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('b_logo')->move("uploads/branches", $fileName);
            }
        }
        $branch = new Branch();
        $branch->id_number =1;
        $branch->name =$input->b_name;
        $branch->email =$input->e_mail;
        $branch->street =$input->street;
        $branch->area =$input->area;
        $branch->city =$input->city;
        $branch->state =$input->state;
        $branch->zip_code =$input->zip_code;
        $branch->country =$input->country;
        $branch->po_box =$input->p_o_box;
        $branch->office_tel =$input->office_tel;
        $branch->fax_no =$input->fax_no;
        $branch->working_days =$input->working_days;
        $branch->working_times =$input->working_times;
        $branch->website =$input->website;
        $branch->branch_logo =$fileName;
        $branch->status =$input->b_status;
        $branch->related_staff = implode(',', $input->support_staff);
        if ($branch->save())
        {
            return redirect('/branch')->with('new_branch', 'New Branch Has Been Added Successfully!');
        }
    }

}
