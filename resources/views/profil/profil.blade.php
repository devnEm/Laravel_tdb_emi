@extends('layouts.adminLayout')


@section('content')



{{ Form::open(array('url'=>'profil/update/'.$user->id)) }}

<div class="form-group">

    {{Form::label('name','Nom : ')}}
    {{ Form::text('name',$user->name) }}
</div>

<div class="form-group">

    {{Form::label('email','Adresse email : ')}}
    {{ Form::email('email' , $user->email) }}
</div>

<div class="form-group">

    {{Form::label('password','Mot de Passe : ')}}
    {{ Form::password('password') }}
</div>
</div>


{{ Form::submit('Enregistrer',['class'=>'btn pull-left']) }}

{{ Form::close() }}

@endsection