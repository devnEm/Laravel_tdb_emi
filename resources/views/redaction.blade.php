@extends('layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Bienvenue à la rédaction</h4>
                    </div>

                    <div class="panel-body">
                        <a href="{{url('redaction/create')}}" class="btn btn-info" ><label>Ajouter un article</label></a>



                            <table class="table">
                                <thead>
                                <td>id</td>
                                <td>titre</td>
                                <td>action</td>
                                <td>action</td>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->titre}}</td>
                                        <td><a href="{{ url('redaction/article/delete', $post->id ) }}"><button>supprimer</button></a></td>

                                    <td><a href="{{ url('redaction/article/edit', $post->id ) }}"><button>editer</button></a></td>
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
                        <a href="{{url('redaction/category')}}" class="btn btn-info" ><label>Ajouter une catégorie</label></a>
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