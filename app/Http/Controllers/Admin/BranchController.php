<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
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
        $branches = 'B-1000';
        return view('admin.branch.create' , compact('branches'));
    }

    public  function new_branch(Request $request)
    {
        $input = $request->all();
        $fileName = null;
        if ($request->hasFile('branch_logo')) {
            if($request->file('branch_logo')->isValid()) {
                $file = $request->file('branch_logo');
                $fileName = str_slug($input['name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('branch_logo')->move("uploads/branches", $fileName);
            }
        }
        $input['branch_logo'] = $fileName;
        $input['id_number'] = '1000';
        $input['related_staff'] = implode(',', $input['related_staff']);

        if (Branch::create($input))
        {
            return redirect('/branch')->with('new_branch', 'New Branch Has Been Added Successfully!');
        }
    }

    public function edit($id)
    {
        $branch = Branch::find($id);
        if ($branch){
            return view('admin.branch.edit' , compact('branch'));
        } else {
            return redirect()->route('branch.index')->with('find', 'No, Branch Found!');
        }
    }

    public function  update($id, Request $request)
    {
        $branch = Branch::find($id);
        if ($branch){
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
            unset($input['_token']);
            $update = Branch::where('id', $id)->update($input);
            if ($update) {
                return redirect()->route('branch.index')->with('new_branch', 'Branch Updated Successfully!');
            }

        } else {
            return redirect()->route('branch.index')->with('find', 'No, Branch Found!');
        }
    }

    public function delete($id)
    {
        $branch = Branch::find($id);
        if ($branch) {
            $branch->delete();
            return redirect()->back()->with('new_branch', 'Branch Deleted Successfully!');
        } else {
            return redirect()->route('branch.index')->with('find', 'No, Branch Found!');
        }
    }
}
