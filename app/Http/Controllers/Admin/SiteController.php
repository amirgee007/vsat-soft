<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use  App\Models\Site;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller
{

    public function index()
    {

        Log::emergency("Hello World");
        Log::alert("Hello World");
        Log::critical("Hello World");
        Log::error("Hello World");
        Log::warning("Hello World");
        Log::notice("Hello World");
        Log::info("Hello World");
        Log::debug("Hello World");
        $sites = Site::all();

        return view('admin.site.index' ,compact('sites'));
    }

    public function create()
    {

        $site_id = Site::getMaxSiteId();
        $branches = Branch::all();
        $selected_branches = [];
        $countries = Country::IsActive()->get();

        return view('admin.site.create', compact('countries','site_id' ,'branches' ,'selected_branches'));
    }

    private function uploadImage($file ,$name){

        if ($file) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/sites/';
            $destinationPath = public_path() . $folderName;
            $safeName = $name.'-'.str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            return $safeName;
        }

        return null;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $site_branches = $request->site_branches;
        $count = 1;

        $data['id_number'] = Site::getMaxSiteId();
        $data['added_by'] = Auth::id();
        $data['site_map_presentation'] = $this->uploadImage($request->file('site_map_presentation') ,$data['name']);
        $data['presentation_of_ins_area'] = $this->uploadImage($request->file('presentation_of_ins_area') ,$data['name']);

        foreach ($data['antenna_mount_loc'] as $antenna_img)
        {
            $data['antenna_mount_loc'.$count] = $this->uploadImage($antenna_img ,$data['name']);
            $count++;
        }

        unset($data['antenna_mount_loc'] ,$data['site_branches']);
        $site =  Site::create($data);

        if ($site){
            $site->branches()->attach($site_branches);
            session()->flash('app_message', 'New Site Has Been Added Successfully!');
        }

        return redirect()->route('site.index');

    }

    public function edit($id)
    {
        $site = Site::where('site_id' ,$id)->first();
        $branches = Branch::all();
        $selected_branches = $site->relatedBranches();

        return view('admin.site.edit' ,compact('site' ,'branches' ,'selected_branches'));
    }

    private function updateImage($file ,$name ,$unlink ){

        if ($file) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/sites/';
            $destinationPath = public_path() . $folderName;
            $safeName = $name.'-'.str_random(10) . '.' . $extension;

            File::delete($destinationPath.$unlink);
            $file->move($destinationPath, $safeName);
            return $safeName;
        }

        return null;
    }


    public function update(Request $request)
    {
        $data = $request->all();
        $site_branches = $request->site_branches;

        $site = Site::findOrFail($request->site_id);

        $data['id_number'] = Site::getMaxSiteId();
        $data['added_by'] = Auth::id();
        if($request->hasFile('site_map_presentation')) {
            $data['site_map_presentation'] = $this->updateImage($request->file('site_map_presentation') ,$data['name'] ,$site->site_map_presentation );
        }

        if($request->hasFile('presentation_of_ins_area')) {
            $data['presentation_of_ins_area'] = $this->updateImage($request->file('presentation_of_ins_area') ,$data['name'],$site->presentation_of_ins_area );
        }

        if(isset($data['antenna_mount_loc']))
        foreach ($data['antenna_mount_loc'] as $index => $antenna_img)
        {
            $name = 'antenna_mount_loc'.(number_format($index)+1);

            $data[$name] = $this->updateImage($antenna_img , $data['name'] ,$site[$name]);
        }


        unset($data['antenna_mount_loc'] ,$data['site_branches']);
        $is_update =  $site->update($data);

        if ($is_update){
            $site->branches()->sync($site_branches);
            session()->flash('app_message', 'Site Has Been Updated Successfully!');
            return redirect()->route('site.index');
        }
        else
        {
            session()->flash('app_error', 'Something went wrong please try again');
            return back();
        }

    }


    public function delete($id)
    {
        $site = Site::find($id);
        $site->branches()->detach();
        $is_delete = $site->delete();
        if($is_delete)
            session()->flash('app_message', 'Site Deleted Successfully!');
        else
            session()->flash('app_warning', 'Site Not Deleted!');

        return redirect()->route('site.index');
    }



}
