@extends('layouts.adminLayout')

@section('content')
	<div class='container'>
	<div class="row">
				<div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>{{$post->titre}}</h4></div>

                        <div class="panel-body">
                        <p>{{$post->article}}</p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
@endsection