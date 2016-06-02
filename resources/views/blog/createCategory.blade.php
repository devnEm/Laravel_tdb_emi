@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">



                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Ajouter une categorie</h4></div>



                    <div class="panel-body">
                        <div class="col-md-9">

                            {{ Form::open(array('url'=>'redaction/category')) }}

                            {{Form::label('label','Titre : ')}}
                            {{ Form::text('label') }}
                         
                            {{ Form::submit('Enregistrer',['class'=>'btn pull-right']) }}
                            
                            {{ Form::close() }}
                            

                        </div>
                        <div class="col-md-3">
                            <table class="table">
                                <thead>
                                    <td>id</td>
                                    <td>label</td>
                                </thead>
                                <tbody>
                                @foreach($categories as $categorie)
                                    <tr>
                                    <td>{{$categorie->id}}</td>
                                    <td>{{$categorie->label}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    


@endsection