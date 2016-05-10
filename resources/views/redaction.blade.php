@extends('layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <a href="{{url('redaction/create')}}" class="btn btn-info" ><label>Ajouter un article</label></a>
                <a href="{{url('redaction/category')}}" class="btn btn-info" ><label>Ajouter une catégorie</label></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Bienvenue à la rédaction</h4>
                    </div>

                    <div class="panel-body">




                            <table class="table">
                                <thead>

                                <td>titre</td>
                                <td>Public</td>
                                <td>Catégorie</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>créé le</td>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>

                                        <td>{{$post->titre}}</td>
                                        <td>{{$post->isPublic}}</td>
                                        <td>{{$post->categorie->label}}</td>
                                        <td><a href="{{ url('redaction/article/delete', $post->id ) }}"><button>supprimer</button></a></td>
                                        <td><a href="{{ url('redaction/article/edit', $post->id ) }}"><button>editer</button></a></td>
                                        <td><a href="{{ url('redaction/article', $post->id ) }}"><button>voir</button></a></td>
                                        <td>{{$post->created_at->toFormattedDateString()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Les Catégories</h4>
                    </div>

                    <div class="panel-body">

                        <div>
                        @foreach($categories as $categorie)
                        <ul>
                            <li>{{$categorie->label}}</li>
                        </ul>

                        @endforeach
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection