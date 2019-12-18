<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $users = User::orderBy('id','ASC')->paginate(2);
        return View('admin.users.index')->with('users', $users);


        // $users = User::all();
        // return view('admin.user.index')->with('users', $users);  
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

    public function update(Request $request, $id) // TODO NO GUARDA administrador UNIFICAR CON EL TOKEN DE LA BASE DE DATOS
    {
       $user = User::find($id);
       $user->fill($request->all());
       $user->save();
       Flash::warning('El usuario '. $user->type.' ha sido modificado exitosamente!');
       return redirect()->route('admin.users.index');
    }

    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        Flash::success("Se ha guardado ".$user->name." de forma exitosa!");
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Flash::error('El usuario'. $user->name.'ha sido eliminado exitosamente!');
        return redirect()->route('admin.users.index');
    }


  
}
