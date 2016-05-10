@extends('layouts.adminLayout')
@include('tinymce::tpl')

@section('content')



{{ Form::open(array('url'=>'/redaction/article/edit/'.$post->id)) }}

<div class="form-group">

    {{Form::label('titre','Titre : ')}}
    {{ Form::text('titre',$post->titre) }}
</div>

<div class="form-group">

    {{Form::label('isPublic','Rendre public : ')}}
    {{ Form::checkbox('isPublic',$post->isPublic) }}
</div>

<div class="form-group">

    {{Form::label('categorie','Catégorie : ')}}
    {{ Form::select('categorie', $categories_label, null,['label'=>'label']) }}
</div>

<div class="form-group">

    {{Form::label('intro','Intro : ')}}
    {{ Form::text('intro',$post->intro) }}
</div>

<div class="form-group" >
    {{ Form::label('article','Article :') }}
    {{ Form::textarea('article',$post->article) }}
</div>

{{ Form::submit('Enregistrer',['class'=>'btn pull-right']) }}

{{ Form::close() }}

@endsection