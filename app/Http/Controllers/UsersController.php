<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::orderBy('id','DESC')->paginate(5);
        return view('admin.users.index', ['users' => $users]); 
    }

    public function create(){
        $roles = Role::all();

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
        //Flash::warning('El usuario '. $user->type.' ha sido modificado de forma exitosa!');
        return redirect()->route('users.index');
    }

    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->status = $request->status;
        $user->password = bcrypt($request->password);
        $user->save();
        //Flash::success("Se ha guardado ".$user->name." de forma exitosa!");
        return redirect()->route('users.index')->with('key', 'You have done successfully');
    }

    public function destroy($id){
        $user = User::findorfail($id);
        $user->delete();
        //Flash::error('El usuario'. $user->name.'ha sido eliminado exitosamente!');
        return redirect()->route('users.index');
    }


  
}
