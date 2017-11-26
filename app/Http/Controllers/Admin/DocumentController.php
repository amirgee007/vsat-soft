<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use PhpParser\Comment\Doc;


class DocumentController extends Controller
{
    public function projectIndex()
    {
        return view('admin.document.project.index');
    }

    public function generalIndex()
    {
        $docs = Document::where(['added_by' => Auth::user()->id, 'type' => 'general'])
            ->orderBy('document_id', 'desc')
            ->get();
        return view('admin.document.general.index', compact('docs'));
    }

    public function generalCreate()
    {
        return view('admin.document.general.create');
    }

    public function generalStore(Request $request)
    {
        $isUploadAble = false;
        $input = $request->all();
        $fileName = '';
        if ($request->hasFile('file_upload_name')) {
            if($request->file('file_upload_name')->isValid()) {
                $file = $request->file('file_upload_name');
                $fileName = str_slug($input['file_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $isUploadAble = true;
            }
        }
        $input['file_upload_name'] = $fileName;
        $input['type'] = 'general';
        $input['added_by'] = Auth::user()->id;
        $doc = Document::create($input);
        if ($doc)
        {
            if($isUploadAble)
            {
                $request->file('file_upload_name')->move("uploads/documents", $fileName);
            }
            session()->flash('app_message', 'New Document Added Successfully!');
        } else {
            session()->flash('app_warning', 'An error occurred, Please try again later!');
        }
        return redirect()->route('document.general.index');
    }

    public function generalEdit($id)
    {
        $doc = Document::where(['document_id'=>$id, 'type' => 'general' ,'added_by' => Auth::user()->id])->first();
        if(!is_null($doc)):
            return view('admin.document.general.edit', compact('doc'));
        else:
            session()->flash('app_warning', 'No, Document Found!');
        endif;
        return redirect()->route('document.general.index');

    }

    public function generalUpdate(Request $request)
    {
        $documentId = $request->document_no;
        $isUploadAble = false;
        $doc = Document::where(['document_id'=>$documentId, 'type' => 'general', 'added_by' => Auth::user()->id])->first();
        if (!is_null($doc))
        {
            $oldFileName = $doc->file_upload_name;
            $input = $request->all();
            if ($request->hasFile('file_upload_name')) {
                if($request->file('file_upload_name')->isValid()) {
                    $file = $request->file('file_upload_name');
                    $fileName = str_slug($input['file_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                    $isUploadAble = true;
                    $input['file_upload_name'] = $fileName;
                }
            }
            unset($input['_token'], $input['document_no']);
            if ($doc->update($input))
            {
                if ($isUploadAble)
                {
                    // todo: first delete previous then store new
                    $destinationPath = public_path().'/uploads/documents/';
                    File::delete($destinationPath.$oldFileName);
                    $request->file('file_upload_name')->move("uploads/documents", $fileName);
                }
                session()->flash('app_message', 'Document Updated Successfully!');
            }else
            {
                session()->flash('app_warning', 'An error occurred, Please try again later');
            }
        }
        else
        {
            session()->flash('app_warning', 'No, Document Found!');
        }

        return redirect()->route('document.general.index');
    }

    public function generalDelete($id)
    {
        $doc = Document::where(['document_id'=>$id, 'type' => 'general', 'added_by' => Auth::user()->id])->first();
        if($doc->delete()):
            $destinationPath = public_path().'/uploads/documents/';
            File::delete($destinationPath.$doc->file_upload_name);
            session()->flash('app_message', 'General Document Deleted Successfully!');
        else:
            session()->flash('app_warning', 'No, Document Found!');
        endif;
        return redirect()->route('document.general.index');
    }

    public function specialIndex()
    {
        $docs = Document::where(['added_by' => Auth::user()->id, 'type' => 'special'])
            ->orderBy('document_id', 'desc')
            ->get();
        return view('admin.document.special.index', compact('docs'));
    }


    public function specialCreate()
    {
        $users = User::all(['id','first_name', 'last_name']);
        return view('admin.document.special.create', compact('users'));
    }
    public function specialStore(Request $request)
    {
        $isUploadAble = false;
        $input = $request->all();
        $fileName = '';
        if ($request->hasFile('file_upload_name')) {
            if($request->file('file_upload_name')->isValid()) {
                $file = $request->file('file_upload_name');
                $fileName = str_slug($input['file_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $isUploadAble = true;
            }
        }
        $input['file_upload_name'] = $fileName;
        $input['type'] = 'special';
        $input['added_by'] = Auth::user()->id;
        unset($input['related_user']);
        $doc = Document::create($input);
        if ($doc)
        {
            $doc->users()->attach($request->related_user);
            if($isUploadAble)
            {
                $request->file('file_upload_name')->move("uploads/documents", $fileName);
            }
            session()->flash('app_message', 'New Document Added Successfully!');
        } else {
            session()->flash('app_warning', 'An error occurred, Please try again later!');
        }
        return redirect()->route('document.special.index');
    }
    public function specialEdit($id)
    {
        $doc = Document::where(['document_id'=>$id, 'type' => 'special' ,'added_by' => Auth::user()->id])->first();
        if(!is_null($doc)):
            $users = User::all(['id','first_name', 'last_name']);
            $relatedUser = $doc->relatedUser();
            return view('admin.document.special.edit', compact('doc', 'users', 'relatedUser'));
        else:
            session()->flash('app_warning', 'No, Document Found!');
        endif;
        return redirect()->route('document.special.index');
    }

    public function specialUpdate(Request $request)
    {
        $documentId = $request->document_no;
        $isUploadAble = false;
        $doc = Document::where(['document_id'=>$documentId, 'type' => 'special', 'added_by' => Auth::user()->id])->first();
        if (!is_null($doc))
        {
            $oldFileName = $doc->file_upload_name;
            $input = $request->all();
            if ($request->hasFile('file_upload_name')) {
                if($request->file('file_upload_name')->isValid()) {
                    $file = $request->file('file_upload_name');
                    $fileName = str_slug($input['file_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                    $isUploadAble = true;
                    $input['file_upload_name'] = $fileName;
                }
            }
            unset($input['_token'], $input['document_no'], $input['related_user']);
            if ($doc->update($input))
            {
                $doc->users()->sync($request->related_user);
                if ($isUploadAble)
                {
                    // todo: first delete previous then store new
                    $destinationPath = public_path().'/uploads/documents/';
                    File::delete($destinationPath.$oldFileName);
                    $request->file('file_upload_name')->move("uploads/documents", $fileName);
                }
                session()->flash('app_message', 'Document Updated Successfully!');
            }else
            {
                session()->flash('app_warning', 'An error occurred, Please try again later');
            }
        }
        else
        {
            session()->flash('app_warning', 'No, Document Found!');
        }

        return redirect()->route('document.special.index');

    }

    public function specialDelete($id)
    {
        $doc = Document::where(['document_id'=>$id, 'type' => 'special', 'added_by' => Auth::user()->id])->first();
        if($doc->delete()):
            $doc->users()->detach();
            $destinationPath = public_path().'/uploads/documents/';
            File::delete($destinationPath.$doc->file_upload_name);
            session()->flash('app_message', 'Special Document Deleted Successfully!');
        else:
            session()->flash('app_warning', 'No, Document Found!');
        endif;
        return redirect()->route('document.special.index');
    }
}
