<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;

class RoleController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $roles = Role::all();
        return view('admin.people.users.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $permissions = Permission::all();//Get all permissions
        $selected_perms = [];
        return view('admin.people.users.roles.create',compact('selected_perms','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
                'name'=>'required|unique:roles|max:10',
                'permissions' =>'required',
            ]
        );

       $role =  Role::create($request->except('_token' ,'permissions','role_id'));

       $role->permissions()->attach($request['permissions']);

        session()->flash('app_message', 'Roles added successfully.');

        return redirect()->route('people.roles.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $role = Role::findOrFail($id);

        $permissions = Permission::all();//Get all permissions
        $selected_perms = $role->relatedPermissions();
        return view('admin.people.users.roles.edit', compact('selected_perms','role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {

        $role_obj = Role::findOrFail($request->role_id);

        $role =  $role_obj->update($request->except('_token' ,'permissions','role_id'));

        $role_obj->permissions()->sync($request['permissions']);

        if($role)
            session()->flash('app_message', 'Roles Updated successfully.');
        else
        session()->flash('app_error', 'Roles Not Updated successfully.');

        return redirect()->route('people.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $role = Role::where('id' ,$id)->delete();

        session()->flash('app_success', 'Roles Deleted successfully.');

        return redirect()->route('people.roles.index');

    }
}
