@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Roles') }}</div>

                <div class="card-body col-md-auto table-responsive " >
                    
                    <table class="table table-bordered table-hover col-*-*">
                        <thead class="thead-dark col-md-auto">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>    
                                <td>{{ $role->name }}</td> 
                                <td>{{ $role->email }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="role List">
                                        <a href="{{ route('admin.roles.show', $role->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Show</a>
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-light" onclick="return confirm('seguro que deseas Modificarlo?')"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Edit</a>
                                        <a href="{{ route('admin.roles.destroy', $role->id) }}" class="btn btn-danger" onclick="return confirm('seguro que deseas Eliminarlo?')"> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>Delete</a>
                                      </div>
                                    </td>
                            </tr>
                        @endforeach
                    </table> 

                    <div class="clearfix">
                        <a href="{{ route('admin.roles.new') }}" class="btn btn-success float-left"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Add New Role</a>
                        <a href="{{ URL::previous() }}" class="btn btn-danger float-left"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a>
                        <ul class="pagination justify-content-center float-right">{{ $roles->links() }}</ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
