@extends('layouts.app')

@section('title', 'Editar Usuario '. $user->name)

@section('content')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Edit User</div>
                  <div class="card-body">

                       {{ Form::open(array('url' => 'admin/users/'.$user->id, 'method' => 'PUT', 'class'=>'col-md-12')) }}

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            {{ Form::label('name','Name') }}
                            {{ Form::text('name', $user->name, ['class'=> 'form-control', 'placeholder'=> 'Name', 'required']) }}
                          </div>

                          <div class="form-group col-md-6">
                            {{ Form::label('email','Email') }}
                            {{ Form::text('email', $user->email, ['class'=> 'form-control', 'placeholder'=> 'Email Address', 'required']) }}
                          </div>
                         
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            {{ Form::label('password','Password') }}
                            {{ Form::text('password', $user->password, ['class'=> 'form-control password', 'placeholder'=> '********', 'required']) }}
                          </div>
                          <div class="form-group col-md-6">

                            <label for="type">Role</label>
                            {{Form::select('type', 
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
                                        ), $user->type, array('class' => 'form-control'))
                            }}
                          </div>

                          <div class="form-group col-md-6">
                            <label for="type">Status</label>
                            {{Form::select('status', 
                                  array(
                                          '1' => 'Active',
                                          '0' => 'Inactive',
                                        ), $user->status, array('class' => 'form-control'))
                            }}
                          </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                        <a href="{{ URL::previous() }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a>

                    {{-- {{ Form::close() }} --}}
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