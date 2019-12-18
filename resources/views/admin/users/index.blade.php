@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Users') }}</div>

                <div class="card-body">
                    
                    
                    <table class="table table-striped table-bordered">
                        <thead>
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
                                    <a href="{{ route('admin.users.edit', 'id='.$user->id) }}" class="btn btn-warning" onclick="return confirm('seguro que deseas Modificarlo?')"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Edit</a>
                                    <a href="{{ route('admin.users.destroy', 'id='.$user->id) }}" class="btn btn-danger" onclick="return confirm('seguro que deseas Eliminarlo?')"> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table> 
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
