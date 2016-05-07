@extends('layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Bienvenue à la rédaction</h4>
                    </div>

                    <div class="panel-body">
                        <a href="{{url('redaction/create')}}" class="btn btn-info" >+</a>
                        <label>Ajouter un article</label>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection