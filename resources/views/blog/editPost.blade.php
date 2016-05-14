@extends('layouts.adminLayout')


@section('content')
    <div class="container">
        @include('tinymce::tpl')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">



                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Ajouter un article</h4></div>



                    <div class="panel-body">
                        <div class="col-md-12">

                            {{ Form::open(array('url'=>'/redaction/article/edit/'.$post->id)) }}

                            <div class="form-group">

                                {{Form::label('titre','Titre : ')}}
                                {{ Form::text('titre',$post->titre) }}
                            </div>

                            <div class="form-group">

                                {{Form::label('isPublic','Rendre public : ')}}
                                {{ Form::checkbox('isPublic',1,$post->isPublic) }}
                            </div>

                            <div class="form-group">

                                {{Form::label('categorie','Catégorie : ')}}
                                {{ Form::select('categorie', $categories_label, $post->categorie->id-1) }}
                            </div>

                            <div class="form-group">

                                {{Form::label('intro','Sous-titre : ')}}
                                {{ Form::text('intro',$post->intro) }}
                                </div>

                                <div class="form-group" >
                                    {{ Form::label('article','Article :') }}
                                    {{ Form::textarea('article',$post->article) }}
                                </div>

                                {{ Form::submit('Enregistrer',['class'=>'btn pull-left']) }}

                                {{ Form::close() }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection