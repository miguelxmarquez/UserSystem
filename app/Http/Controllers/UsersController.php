<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Alert;

class UsersController extends Controller{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::orderBy('id','DESC')->paginate(5);

        // if (session('success')) {
        //     Alert::success('Success!', session('Success Message'));
        // }
        // if (session('error_,essage')) {
        //     Alert::success('Error!', session('Error Message'));
        // }

        return view('admin.users.index', ['users' => $users]); 
    }

    public function create(){
        $roles = Role::orderBy('id','ASC')->pluck('name', 'id');
        
        return view('admin.users.new')->with([
            'roles' => $roles
         ]);  
    }

    public function show($id){
          $user = User::findOrFail($id);
          return view('admin.users.profile', ['user' => $user]);
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user){

        $user->fill($request->all());
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function store(Request $request){

        // $request->validate([
        //     'name' => 'required|min:5',
        //     'password' => 'required|min:8'
        // ]);

        $validator = Validator::make( $request->all(), [
            'name' => 'required', 'min:5',
            'email' => 'required', 'unique:users',
            'password' => 'required', 'min:8',
            'type' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->messages()->all()[0])->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'status' => $request->status,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index')->with('success', 'User saved successfully');
    }

    public function destroy($id){
        $user = User::findorfail($id);
        $user->delete();
        
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
        
        
    }


  
}
