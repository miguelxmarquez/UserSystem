<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        return view('admin.users.new');  
    }

    public function show($id)
    {
          $user = User::findOrFail($id);
          return view('admin.users.profile', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id) 
    {
       $user = User::find($id);
       $user->fill($request->all());
       $user->save();
       Flash::success("Se ha actualizado ".$user->name." de forma exitosa!");
       return redirect()->route('admin.users');
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        //Flash::success("Se ha guardado ".$user->name." de forma exitosa!");
        return redirect()->route('users.index')->with('key', 'You have done successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Flash::error('El usuario'. $user->name.'ha sido eliminado exitosamente!');
        return redirect()->route('admin.users.index');
    }


  
}
