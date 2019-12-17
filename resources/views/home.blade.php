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

                    You are logged in!

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Users</h5>
                                    <p class="card-text">Manage all your users in one place</p>
                                    <a href="admin/users" class="btn btn-success btn-lg my-2">Manage</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales</h5>
                                    <p class="card-text">We have special discounts at the best toys</p>
                                    <a href="admin/users" class="btn btn-success btn-lg my-2">Manage</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Inventory</h5>
                                    <p class="card-text">Manage with the click of a button</p>
                                    <a href="admin/users" class="btn btn-success btn-lg my-2">Manage</a>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
