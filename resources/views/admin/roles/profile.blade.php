@extends('layouts.app')

@section('title', 'Editar Role '. $role->name )

@section('content')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Edit Role</div>
                  <div class="card-body">

                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Slug</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">Description</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div> 
@endsection