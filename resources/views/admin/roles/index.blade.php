@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Roles') }}</div>



                <div class="card-body col-md-auto table-responsive " >
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <div class="clearfix">
                                <a href="{{ route('roles.create') }}" class="btn btn-success float-left"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Add New Role</a>
                            </div>
                        </div>
                    </div>



                        <table class="table table-bordered table-hover col-*-*">
                        <thead class="thead-dark col-md-auto">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>    
                                <td>{{ $role->name }}</td> 
                                <td>{{ $role->slug }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Role List">
                                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Show</a>
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-light"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Edit</a>
                                        <a href="{{ route('admin.roles.destroy', $role->id) }}" class="btn btn-danger" onclick="return confirm('seguro que deseas Eliminarlo?')"> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>Delete</a>
                                      </div>
                                 
                                    </td>
                            </tr>
                        @endforeach
                    </table> 


                    
                    <div class="clearfix">
                        <ul class="pagination float-right">{{ $roles->links() }}</ul>
                        <a href="{{ URL::previous() }}" class="btn btn-danger float-right><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
