@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="https://www.w3schools.com/howto/img_avatar.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Users</h5>
                                    <p class="card-text">Manage all your users in one pretty place</p>
                                    <a href="admin/users" class="btn btn-info btn-lg my-2">Manage</a>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" class="card-img-top" alt="...">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Roles</h5>
                                    <p class="card-text">Manage your user roles with the click of a button</p>
                                    <a href="admin/roles" class="btn btn-info btn-lg my-2">Manage</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" class="card-img-top" alt="...">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Permissions</h5>
                                    <p class="card-text">Manage your user permissions of roles</p>
                                    <a href="admin/users/new" class="btn btn-info btn-lg my-2">Manage</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
