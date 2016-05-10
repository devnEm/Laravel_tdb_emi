@extends('layouts.adminLayout')

@section('content')
	<div class='container'>
	<div class="row">
				<div class="col-md-8">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p><h2>{!! $post->titre !!}</h2></p>
                            <p><strong>{!! $post->intro !!}</strong></p>
                            <p>{!! $post->article !!}</p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
@endsection