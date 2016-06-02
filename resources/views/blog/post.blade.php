@extends('layouts.main')

@section('content')
	<div class='container'>
	<div class="row">
        <div class="col-md-7 col-md-offset-2">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>
                                <h2>{!! $post->titre !!}</h2>
                                <label>Crée le : </label> {{$post->created_at->formatLocalized('%d %B %Y')}}
                            </p>
                            <p><strong>{!! $post->intro !!}</strong></p>
                            <p>{!! $post->article !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection