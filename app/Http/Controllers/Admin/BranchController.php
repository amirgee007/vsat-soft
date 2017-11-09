<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BranchController extends Controller
{

    public function index()
    {

        $user_id = Auth::user()->id;
        $branches = Branch::where('added_by', $user_id)->get();
        return view('admin.branch.index' , compact('branches'));
    }

    public function create()
    {
        $data['branch_no'] = Branch::max('branch_id')+1;
        $data['countries'] = '';
        $data['rel_staff'] = '';
        return view('admin.branch.create' , compact('data'));
    }

    public  function new_branch(Request $request)
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
        $input['id_number'] = Branch::max('branch_id')+1;
        //$input['related_staff'] = implode(',', $input['related_staff']);
        unset($input['related_staff']);

        if (Branch::create($input))
        {
            return redirect('/branch')->with('new_branch', 'New Branch Has Been Added Successfully!');
        }
    }

    public function edit($id)
    {
        $branch = Branch::where('branch_id', $id)
            ->where('added_by', Auth::user()->id)
            ->first();
        if ($branch){
            return view('admin.branch.edit' , compact('branch'));
        } else {
            return redirect()->route('branch.index')->with('find', 'No, Branch Found!');
        }
    }

    public function  update($id, Request $request)
    {
        $branch = Branch::where('branch_id', $id)
            ->where('added_by', Auth::user()->id)
            ->first();
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
        $branch = Branch::where('branch_id', $id)
            ->where('added_by', Auth::user()->id);
        if ($branch->count() == 1) {
            $branch->delete();
            return redirect()->back()->with('new_branch', 'Branch Deleted Successfully!');
        } else {
            return redirect()->route('branch.index')->with('find', 'No, Branch Found!');
        }
    }
}
