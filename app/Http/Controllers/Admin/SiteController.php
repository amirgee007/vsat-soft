<?php

namespace App\Http\Controllers\Admin;

use  App\Models\Site;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function index()
    {
        $sites = Site::all();

        return view('admin.site.index' ,compact('sites'));
    }

    public function create()
    {
        $site_id = Site::getMaxSiteId();
        $branches = Branch::all();

        return view('admin.site.create', compact('site_id' ,'branches'));
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

        $data['site_map_presentation'] = $this->uploadImage($request->file('site_map_presentation') ,$data['name']);
        $data['presentation_of_ins_area'] = $this->uploadImage($request->file('presentation_of_ins_area') ,$data['name']);

        dd('jana');
        }

    public function edit()
    {
        return view('admin.site.edit');
    }
}
