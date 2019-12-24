@extends('layouts.app')

@section('title', 'Editar Usuario '. $user->name)

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
                            <input type="text" class="form-control" id="name" value="{{$user->name}}" disabled>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" id="email" value="{{$user->email}}" disabled>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" value="{{$user->password}}" disabled>
                          </div>
                          <div class="form-group col-md-6">

                            <label for="disabledSelect">Role</label>
                            {{ Form::select('role', $roles, $user->role, array('class' => 'form-control',  'disabled')) }}

                          </div>
                          <div class="form-group col-md-6">

                          <label for="disabledSelect">Status</label>
                            {{Form::select('type', 
                                  array(
                                          '1' => 'Active',
                                          '0' => 'Inactive',
                                        ), 
                                  $user->status, array('class' => 'form-control', 'disabled'))
                            }}
                          </div>

                        </div>

                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary float-right"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Edit</a>
                        <a href="{{ URL::previous() }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a>

                        </form>
                   </div> 
                   <div class="card-footer text-muted">
                    
                  </div>
               </div>     
           </div>
       </div>
    </div>
</div> 
@endsection