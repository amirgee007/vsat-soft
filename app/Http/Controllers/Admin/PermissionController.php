<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

use Session;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions=Permission::all();
        return view('admin.people.users.permissions.index' ,compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.people.users.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{

            $isSaved = Permission::create($request->except('_token'));

            if ($isSaved){
                session()->flash('app_message', 'Permission added successfully.');
            }else {
                session()->flash('app_error', 'Error in insertion');
            }

            return redirect()->route('permissions.index');


        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return redirect()->back();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $permission=Permission::where('id',$id)->first();

        return view('admin.people.users.permissions.edit', compact( 'permission'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        try{

            $permission_obj = Permission::where('id',$request->id)->first();

            $isUpdate = $permission_obj->update($request->except('_token','id'));

            if ($isUpdate){
                session()->flash('app_message', 'Permission Updated successfully.');
            }else {
                session()->flash('app_error', 'Error in insertion');
            }

            return redirect()->route('permissions.index');


        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return redirect()->back();
        }

    }

    public function show($id){

        try{

            $permission_obj = Permission::where('id',$id)->first();
            $permission_obj->roles()->sync([]);

            $isDelete = $permission_obj->delete();

            if ($isDelete){
                session()->flash('app_message', 'Permission Deleted successfully.');
            }else {
                session()->flash('app_error', 'Error in Deletion');
            }

            return redirect()->route('permissions.index');


        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        dd('delete');

        $perm= Permission::firstOrCreate([
            'id' => $id
        ]);

        $perm->roles()->sync([]);
        $isDelete = $perm->delete();


        if ($isDelete){
            return response()->json([
                'status' => 'true'
            ]);

        } else {
            return response()->json([
                'status' => 'false'
            ]);

        }

    }

}
