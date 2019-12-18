@extends('layouts.app')

@section('title', 'Editar Usuario '. $user->name )

@section('content')
  {!! Form::model($user, ['action' => ['UsersController@update', $user->id],'method' => 'PUT']) !!}

  <div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', $user->name, ['class'=> 'form-control', 'placeholder'=> 'Nombre Completo', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('email','Correo Electronico') !!}
    {!! Form::email('email', $user->email, ['class'=> 'form-control', 'placeholder'=> 'example@gmail.com', 'required']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('type','Tipo') !!}
    {{-- {!! Form::select('type', ['member'=> 'miembro', 'admin'=> 'administrador'], $user->type, ['class'=>'form-control']); !!} --}}
  </div>

  <div class="form-group">

    {!! Form::submit('Modificar',['class'=>'btn btn-primary']) !!}

  </div>


  {!! Form::close() !!}

@endsection