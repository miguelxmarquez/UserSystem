@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Users') }}</div>

                <div class="card-body col-md-auto table-responsive " >
                    
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
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->type }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="User List">
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Show</a>
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-light" onclick="return confirm('seguro que deseas Modificarlo?')"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Edit</a>
                                        <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('seguro que deseas Eliminarlo?')"> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>Delete</a>
                                      </div>
                                    </td>
                            </tr>
                        @endforeach
                    </table> 
                    <div class="clearfix">
                        <a href="{{ route('admin.users.new') }}" class="btn btn-success float-left"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Add New User</a>
                        <a href="{{ URL::previous() }}" class="btn btn-danger float-left"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a>
                        <ul class="pagination justify-content-center float-right">{{ $users->links() }}</ul>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
