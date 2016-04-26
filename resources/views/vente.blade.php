@extends('layouts.app')

@section('content')

    <div class="container">
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ajouter une vente</div>

                        <div class="panel-body">

                            {{ Form::open(array('url'=>'vente')) }}

                            <div class="form-group">

                                {{Form::label('mois','Mois : ')}}
                                {{ Form::select('mois', $mois_label, null,['label'=>'label']) }}
                            </div>
                            <div class="form-group">

                                {{Form::label('support','Support : ')}}
                                {{ Form::select('support', $support_label, null,['label'=>'label']) }}

                            </div>

                            <div class="form-group" >
                                {{ Form::label('montant','Montant') }}
                                {{ Form::number('montant') }}
                            </div>
                            <div class="form-group" >
                                {{ Form::label('client','Client') }}
                                {{ Form::text('client') }}
                            </div>

                            {{ Form::submit('Enregistrer',['class'=>'btn pull-right']) }}

                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Toutes mes ventes</div>

                        <div class="panel-body">
                            
                            <table class="table">
                                <thead>
                                <td>Client</td>
                                <td>Mois</td>
                                <td>Support</td>
                                <td>Montant</td>
                                {{--<td>Action</td>--}}
                                </thead>
                                <tbody>
                                @foreach($ventes as $vente)
                                <tr>

                                    <td>{{ $vente->client }}</td>

                                    <td>{{$vente->produit->mois->label }}</td>
                                    <td>{{$vente->produit->support->label}}</td>

                                    <td>{{$vente->montant}}</td>
                                        {{--<td><button>supprimer</button><button>Editer</button></td>--}}

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
