@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Bienvenue à la rédation</h4></div>

                    <div class="panel-body">
                        <a href="/redaction/create" >Ajouter un article</a>
                        <a href="/redaction/admin" >Gerer mes article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection