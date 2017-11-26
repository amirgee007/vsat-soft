<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\User;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    public function index() {
        $data['clients'] = Client::all();
        return view('admin.people.clients.index', compact('data'));
    }
    public function createClients()
    {
        $data['client_no'] = Client::getMaxClientId();
        $users = User::all(['id','first_name', 'last_name']);
        $countries = Country::all();
        $related_user = [];
        return view('admin.people.clients.create', compact('countries','data' ,'users' ,'related_user'));
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $fileName = '';
        if ($request->hasFile('client_logo')) {
            if($request->file('client_logo')->isValid()) {
                $file = $request->file('client_logo');
                $fileName = str_slug($input['org_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('client_logo')->move("uploads/clients", $fileName);
            }
        }
        $input['client_logo'] = $fileName;
        $input['added_by'] = Auth::user()->id;
        $input['client_number'] = 'C-'.Client::max('client_id')+1;
        $client = Client::create($input);

        if ($client){

            session()->flash('app_message', 'New Client Has Been Added Successfully!');
        }

        return redirect()->route('people.clients.index');


    }

    public function edit($id)
    {
        $client = Client::where('client_id', $id)->first();
        $countries = Country::all();
        return view('admin.people.clients.edit', compact('countries','client'));
    }

    public function update (Request $request)
    {
        $client = Client::find($request->client_no);
        if (!is_null($client))
        {
            $fileName = $client->cleint_logo;
            $input = $request->all();
            if ($request->hasFile('client_logo')) {
                if($request->file('client_logo')->isValid()) {
                    $file = $request->file('client_logo');
                    $fileName = str_slug($input['org_name']).'-'.time() . '.' . $file->getClientOriginalExtension();
                    $request->file('client_logo')->move("uploads/clients", $fileName);
                }
            }
            $input['client_logo'] = $fileName;
            unset($input['_token'], $input['client_no']);
            if ($client->update($input)):
                session()->flash('app_message', 'Client Has Been Updated Successfully!');
            else:
                session()->flash('app_warning', 'An error occurred, Please try again later');
            endif;
            return redirect()->route('people.clients.index');
        }
        session()->flash('app_warning', 'No, Client Found!');
        return redirect()->route('people.clients.index');

    }
    public function delete($id)
    {
        $client = Client::find($id);
        if($client->delete())
            session()->flash('app_message', 'Client Deleted Successfully!');
        else
            session()->flash('app_warning', 'Client Not Deleted!');

        return redirect()->route('people.clients.index');
    }

}
