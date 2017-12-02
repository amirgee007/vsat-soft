<?php

namespace App\Http\Controllers\Admin;

use App\Models\Asset;
use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AssetController extends Controller
{

    public function index()
    {
        $assets = Asset::all();
        return view('admin.asset.index' ,compact('assets'));
    }

    public function create()
    {
        $sites = Site::all();
        return view('admin.asset.create' ,compact('sites'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $fileName = '';
        if ($request->hasFile('bar_code_img')) {
            if($request->file('bar_code_img')->isValid()) {
                $file = $request->file('bar_code_img');
                $fileName = str_slug($input['asset_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('bar_code_img')->move("uploads/assets", $fileName);
            }
        }

        $input['bar_code_img'] = $fileName;
        $input['added_by'] = Auth::user()->id;

        $assets = Asset::create($input);

        if ($assets){
            session()->flash('app_message', 'New Asset Has Been Added Successfully!');
        }

        return redirect()->route('asset.index');

    }

    public function update(Request $request)
    {
        $input = $request->all();
        $asset_obj = Asset::where('asset_id' ,$request->asset_id)->first();

        $fileName = '';
        if ($request->hasFile('bar_code_img')) {
            if($request->file('bar_code_img')->isValid()) {
                $destinationPath = public_path().'/uploads/assets/';
                File::delete($destinationPath.$asset_obj->bar_code_img);
                $file = $request->file('bar_code_img');
                $fileName = str_slug($input['asset_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('bar_code_img')->move("uploads/assets", $fileName);
            }
            //delete old image
        }

        $input['bar_code_img'] = $fileName;
        $input['added_by'] = Auth::user()->id;

        unset($input['asset_id']);
        $assets = $asset_obj->update($input);

        if ($assets){
            session()->flash('app_message', 'Asset Has Been Updated Successfully!');
        }

        return redirect()->route('asset.index');

    }

    public function edit($id)
    {
        $asset = Asset::where('asset_id' ,$id)->first();
        return view('admin.asset.edit' ,compact('asset'));
    }

    public function  delete($id)
    {
        $asset = Asset::find($id);
        $asset->sites()->detach();
        $is_delete = $asset->delete();
        if($is_delete)
            session()->flash('app_message', 'Asset Deleted Successfully!');
        else
            session()->flash('app_warning', 'Asset Not Deleted!');

        return redirect()->route('asset.index');
    }
}
