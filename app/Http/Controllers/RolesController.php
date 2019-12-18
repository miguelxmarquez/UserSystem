<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('admin.roles.index', ['roles' => $roles]); 
    }

    public function create(){
        return view('admin.roles.new');  
    }

    public function show($id)
    {
          $role = Role::findOrFail($id);
          return view('admin.roles.profile', ['role' => $role]);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('admin.roles.edit')->with('role', $role);
    }

    public function update(Request $request, $id) 
    {
       $role = Role::find($id);
       $role->fill($request->all());
       $role->save();
       Flash::success("Se ha actualizado ".$role->name." de forma exitosa!");
       return redirect()->route('admin.roles');
    }

    public function store(roleRequest $request)
    {
        $role = new Role($request->all());
        $role->password = bcrypt($request->password);
        $role->save();
        Flash::success("Se ha guardado ".$role->name." de forma exitosa!");
        return redirect()->route('admin.roles');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        Flash::error('El usuario'. $role->name.'ha sido eliminado exitosamente!');
        return redirect()->route('admin.roles.index');
    }


  
}
