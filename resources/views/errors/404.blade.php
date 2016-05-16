@extends('layouts.adminLayout')

@section('content')
    <div class="col-md-6 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-danger panel-body">
                <label><h1>ERREUR 404</h1></label>
                <p>La ressource que vous demandez n'existe pas !!!</p>
                <a href="{{url('/')}}">Retour</a>
            </div>

        </div>
    </div>

@endsection