@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Users') }}</div>
                <div class="card-body col-md-auto table-responsive " >
                        
                    <div class="clearfix">
                        <div class="form-group row">
                            <div class="col-md-6">

                            <a href="{{ route('users.create') }}" class="btn btn-success float-left"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Add New User</a>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered table-hover col-*-*">
                        <thead class="thead-dark col-md-auto">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>    
                                <td>{{ $user->name }}</td> 
                                <td>{{ $user->email }}</td>
                                <td>
                                    {{Form::select('status', 
                                    array(
                                            '1' => 'Active',
                                            '0' => 'Inactive',
                                          ), $user->status, array('class' => 'form-control', 'disabled'))
                                    }}
                                </td>
                                <td>{{ Form::select('role', $roles, $user->role, array('class' => 'form-control', 'disabled')) }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="User List">
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Show</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-light"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Edit</a>
                                        <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('seguro que deseas Eliminarlo?')"> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>Delete</a>
                                      </div>
                                    </td>
                            </tr>
                        @endforeach
                    </table> 
                    <div class="clearfix">
                        <ul class="pagination float-right">{{ $users->links() }}</ul>
                        <a href="{{ URL::previous() }}" class="btn btn-danger float-right><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a> 
                    </div>
                    
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
    </div>

    <script> 
        swal({
            "timer":1800,
            "title":"Título",
            "text":"Notificación Básica",
            "showConfirmButton":false
        });
    </script>
@endsection
