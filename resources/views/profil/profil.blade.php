@extends('layouts.adminLayout')


@section('content')
    <div class="col-md-6 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Profil</h4></div>
            <div class="panel-body">


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


            <div class="form-group">


{{ Form::submit('Enregistrer',['class'=>'btn pull-left']) }}

{{ Form::close() }}
            </div>
        </div>
    </div>
    </div>


@endsection