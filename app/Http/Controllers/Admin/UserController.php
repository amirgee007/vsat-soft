<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfileFormPost;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Importing laravel-permission models
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profile(){
        $user = Auth::user();
        return view('admin.profile.show' , compact('user'));
    }

    public function profileUpdate(ProfileFormPost $request){

        $data = $request->except('_token' ,'profile_pic');
        $user = User::find($request->user_id);


        if ($file = $request->file('profile_pic')) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ? : 'png';
            $folderName = '/uploads/users/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            $data['profile_pic'] = $safeName;
        }

        $is_updated = ($user->update($data));

        if($is_updated)
            session()->flash('app_message', 'Profile info has been successfully updated');
        else
            session()->flash('app_error', 'Profile info has not been successfully updated');


        return back();
    }

    public function index() {
        $users = User::all();
        return view('admin.people.users.index' ,compact('users'));
    }


    public function create() {

        return view('admin.people.users.create');
    }


    public function store(Request $request) {

        $this->validate($request, [
            'user_name'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $data  = $request->except('password_confirmation','_token');

        if ($request->hasFile('profile_pic')) {
            if($request->file('profile_pic')->isValid()) {
                $file = $request->file('profile_pic');
                $data['profile_pic'] = str_slug($request->user_name).'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('profile_pic')->move("uploads/users", $data['profile_pic']);
            }
        }

        $user = User::create($data);

        if($user){
            session()->flash('app_message', 'User Added successfully!');
            return redirect()->route('people.users.index');
        }
        else{
            session()->flash('app_error', 'Some thing went wrong!');
            return redirect()->back();
        }

    }


    public function show($id) {
        return redirect('users');
    }


    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.people.users.edit', compact('user'));
    }

    public function update(Request $request) {
        $user = User::findOrFail($request->user_id);

        $data  = $request->except('password_confirmation','_token');

        if(is_null($request->password))
            unset($data['password']);
        else
            $this->validate($request, [
                'password'=>'required|min:6|confirmed'
            ]);

        if ($request->hasFile('profile_pic')) {
            if($request->file('profile_pic')->isValid()) {
                $file = $request->file('profile_pic');
                $data['profile_pic'] = str_slug($request->user_name).'-'.time() . '.' . $file->getClientOriginalExtension();
                $request->file('profile_pic')->move("uploads/users", $data['profile_pic']);
                File::delete("uploads/users/".$user->profile_pic);
            }
        }


        $user = $user->update($data);

        if($user){
            session()->flash('app_message', 'User Updated successfully!');
            return redirect()->route('people.users.index');
        }
        else{
            session()->flash('app_error', 'Some thing went wrong!');
            return redirect()->back();
        }

    }


    public function delete($id) {

        if($id==Auth::id()){
            session()->flash('app_warning', 'you cannot delete yourself');
            return redirect()->back();
        }

        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('app_message', 'User Deleted successfully!');
        return redirect()->back();
    }
}
