@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                    {{Form::select('type', 
                                          array(
                                                  '' => 'Choose...', 
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
                                                ), 
                                          '', array('class' => 'form-control form-group col-md-6'))
                                    }}
                            </div>

                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                    {{Form::select('status', 
                                          array(
                                                  '1' => 'Active', 
                                                  '0' => 'Inactive',
                                                ), 
                                          '', array('class' => 'form-control form-group col-md-6'))
                                    }}
        
                            </div>
                            
                            {{-- @foreach ($roles as $role)
                                <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}">
                                <label>{{ $role->name }}</label>
                                </div>
                            @endforeach --}}

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary float-right">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{ URL::previous() }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Back</a>                                
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
