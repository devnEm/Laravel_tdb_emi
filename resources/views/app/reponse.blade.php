@extends('layouts.adminLayout')

@section('content')
	<div class='container'>
	<div class="row">
        <div class="col-md-7 col-md-offset-2">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>
                                <h2>{!! $request->titre !!}</h2>
                                <label>Crée le : </label> {{$request->created_at->formatLocalized('%d %B %Y')}}
                            </p>
                            <p>message de départ : </p>
                            <p><strong>{!! $request->message !!}</strong></p>
                            <hr>
                            <p>Réponse : </p>
                            <p>{!! $request->reponse !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection