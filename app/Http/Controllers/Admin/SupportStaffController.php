<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Models\SupportStaff;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SupportStaffController extends Controller
{
    public function index()
    {
        $supportStaff = SupportStaff::where('added_by', Auth::user()->id)
            ->orderBy('support_staff_id', 'desc')
            ->get();
        return view('admin.people.support-staff.index', compact('supportStaff'));
    }

    public function createStaff()
    {
        $staff_no = SupportStaff::getMaxStaffId();
        $users = User::all(['id','first_name', 'last_name']);
        $relatedUser = [];
        return view('admin.people.support-staff.create', compact('staff_no', 'users' ,'relatedUser'));
    }

    public function store(Request $request)
    {
        $isUploadAble = false;
        $input = $request->all();
        $staff = new SupportStaff();
        $fileName = '';
        if ($request->hasFile('visa_staff_photo')) {
            if($request->file('visa_staff_photo')->isValid()) {
                $file = $request->file('visa_staff_photo');
                $fileName = str_slug($input['first_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $isUploadAble = true;
            }
        }
        $input['visa_staff_photo'] = $fileName;
        $input['added_by'] = Auth::user()->id;
        $input['staff_id'] = SupportStaff::getMaxStaffId();
        unset($input['related_user']);
        $staff = $staff->create($input);
        if ($staff)
        {
            $staff->users()->attach($request->related_user);
            if($isUploadAble)
            {
                $request->file('visa_staff_photo')->move("uploads/support_staff", $fileName);
            }
            session()->flash('app_message', 'New Staff Added Successfully!');
        }
        return redirect()->route('people.supportStaff.index');
    }

    public function editStaff($id)
    {
        $staff = SupportStaff::where(['support_staff_id'=>$id, 'added_by' => Auth::user()->id])->first();
        $users = User::all(['id','first_name', 'last_name']);
        $relatedUser = $staff->relatedUser();
        return view('admin.people.support-staff.edit', compact('staff', 'users', 'relatedUser'));
    }

    public function update(Request $request)
    {

        $staffId = $request->staff_no;
        $isUploadAble = false;
        $staff = SupportStaff::where(['support_staff_id'=>$staffId, 'added_by' => Auth::user()->id])->first();
        if (!is_null($staff))
        {
            $fileName = $staff->visa_staff_photo;
            $input = $request->all();
            if ($request->hasFile('visa_staff_photo')) {
                if($request->file('visa_staff_photo')->isValid()) {
                    $file = $request->file('visa_staff_photo');
                    $fileName = str_slug($input['first_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                    $isUploadAble = true;
                }
            }
            $input['visa_staff_photo'] = $fileName;
            unset($input['_token'], $input['staff_no'], $input['related_user']);
            if ($staff->update($input)) {
                $staff->users()->sync($request->related_user);
                if ($isUploadAble) {
                    // todo: first delete previous then store new
                    $request->file('visa_staff_photo')->move("uploads/support_staff", $fileName);
                }

                session()->flash('app_message', 'Staff Updated Successfully!');

            }else{
                session()->flash('app_warning', 'An error occurred, Please try again later');
            }
        }
        else{
            session()->flash('app_warning', 'No, Staff Found!');
        }

        return redirect()->route('people.supportStaff.index');
    }
    public function delete ($id)
    {
        $staff = SupportStaff::where(['support_staff_id'=>$id, 'added_by' => Auth::user()->id]);
        if($staff->delete())
            session()->flash('app_message', 'Staff Deleted Successfully!');
        else
            session()->flash('app_warning', 'Staff Not Deleted!');
        return redirect()->route('people.supportStaff.index');
    }
}
