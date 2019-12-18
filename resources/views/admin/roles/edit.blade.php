@extends('layouts.app')

@section('title', 'Editar Usuario '. $user->name )

@section('content')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Edit User</div>
                  <div class="card-body">

                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" value="{{$user->name}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" id="email" value="{{$user->email}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">Password</label>
                            <input type="password" class="form-control" id="password" value="{{$user->pass}}">
                          </div>
                          <div class="form-group col-md-6">

                            <label for="inputState">Role</label>
                           
                            {{Form::select('size', 
                                  array(
                                          'master' => 'Master', 
                                          'study' => 'Study', 
                                          'sub-study' => 'Sub-study', 
                                          'admin' => 'Admin', 
                                          'manager' => 'Manager',
                                          'accounts' => 'Accounts',
                                          'monitor' => 'Monitor',
                                          'model' => 'Model',
                                          'design' => 'Design',
                                          'photos' => 'Photos',
                                          'shop' => 'Shop',
                                        ), 
                                  $user->type, array('class' => 'form-control'))
                            }}

                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Only Read
                            </label>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::previous() }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a>

                      </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div> 
@endsection