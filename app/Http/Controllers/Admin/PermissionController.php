<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Session;

class PermissionController extends Controller
{

    public function index()
    {
        $role = Permission::where('id' , '2')->first();

        $permissions=Permission::all();
        return view('admin.permissions.index' ,compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.permissions.create');

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

            //todo:ID not autoincrement

            $permission = new Permission();

            $permission->name = $request->name;
            $permission->slug = $request->slug;
            $permission->description = $request->description;

            $isSaved = $permission->save();

            if ($isSaved){
                session()->flash('app_info', 'Permission added successfully.');
                return Redirect::route('permissions.index');


            }else {
                session()->flash('error', 'Error in insertion');
                return redirect()->back();
            }


        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');

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

        return view('admin.permissions.edit', compact( 'permission'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try{

            $name = $request->name;
            $slug = $request->slug;
            $description = $request->description;

            $isUpdate = Permission::where('id' ,$id )->update([

                'name' => $name ,
                'slug' => $slug ,
                'description' => $description

            ]);

            if ($isUpdate){
                session()->flash('app_info', 'Permission updated successfully.');
                return Redirect::route('permissions.index');


            }else {
                session()->flash('error', 'Error in updating');
                return redirect()->back();
            }


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
