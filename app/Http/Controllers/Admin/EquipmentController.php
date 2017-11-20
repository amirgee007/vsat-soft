<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Monolog\Processor\TagProcessor;

class EquipmentController extends Controller
{

    public function index()
    {
        $tools = Tool::where('added_by', Auth::user()->id)
            ->orderBy('tool_id', 'desc')
            ->select('tool_id', 'tool_type', 'tool_name', 'tool_img', 'description')
            ->get();
       return view('admin.equipments.index', compact('tools'));
    }

    public function create()
    {
        return view('admin.equipments.create');
    }

    public function store(Request $request)
    {
        $isUploadAble = false;
        $input = $request->all();
        $fileName = '';
        if ($request->hasFile('tool_img')) {
            if($request->file('tool_img')->isValid()) {
                $file = $request->file('tool_img');
                $fileName = str_slug($input['tool_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $isUploadAble = true;
            }
        }
        $input['tool_img'] = $fileName;
        $input['added_by'] = Auth::user()->id;
        $tool = Tool::create($input);
        if ($tool)
        {
            if($isUploadAble)
            {
                $request->file('tool_img')->move("uploads/tools_equipments", $fileName);
            }
            session()->flash('app_message', 'New Tool Added Successfully!');
        }
        return redirect()->route('equipments.index');

    }

    public function edit($id)
    {
        $tool = Tool::where(['added_by' => Auth::user()->id, 'tool_id' => $id])
                ->first();
        if ( !is_null($tool))
            return view('admin.equipments.edit', compact('tool'));

        session()->flash('app_warning', 'No, Tool Found!');
        return redirect()->route('equipments.index');

    }

    public function update(Request $request)
    {
        $input =    $request->all();
        $tool_id =  $input['tool_no'];
        $filter_options = array(
            'options' => array( 'min_range' => 1)
        );
        if ( isset($tool_id) && filter_var( $tool_id, FILTER_VALIDATE_INT, $filter_options ))
        {
            $tool = Tool::where(['added_by' => Auth::user()->id, 'tool_id' =>  $tool_id])
                    ->first();
            if ( !is_null($tool) ) {
                $fileName =  $tool->tool_img;
                $input = $request->all();
                if ($request->hasFile('tool_img')) {
                    if($request->file('tool_img')->isValid()) {
                        $file = $request->file('tool_img');
                        $fileName = str_slug($input['tool_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                        $isUploadAble = true;
                    }
                }
                unset($input['tool_no']);
                $input['tool_img'] = $fileName;
                $update = $tool->update($input);
                if ( $update ) {
                    session()->flash('app_message', 'Tool Updated Successfully!');
                    return redirect()->route('equipments.index');
                }
            }
        }
        session()->flash('app_warning', 'No, Tool Found!');
        return redirect()->route('equipments.index');
    }

    public function delete($id)
    {
        $tool = Tool::where(['added_by' => Auth::user()->id, 'tool_id' => $id]);
        if ($tool->delete())
            session()->flash('app_message', 'Tool Deleted Successfully!');
        else
            session()->flash('app_warning', 'No, Tool Found!');
        return redirect()->route('equipments.index');
    }
}
