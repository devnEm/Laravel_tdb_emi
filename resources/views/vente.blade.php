@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            {{$time->toTimeString()}}
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ajouter une vente</div>

                        <div class="panel-body">

                            {{ Form::open(array('url'=>'vente')) }}

                            {{ Form::label('montant','Montant',array('id'=>'','class'=>'form-group')) }}
                            {{ Form::number('montant','',array('id'=>'','class'=>'form-group')) }}
                            {{ Form::label('client','Client',array('id'=>'','class'=>'form-group')) }}
                            {{ Form::text('client','',array('id'=>'','class'=>'form-group')) }}

                            {{ Form::submit('Enregistrer') }}
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mes Ventes</div>

                        <div class="panel-body">
                            <h3>Toutes mes ventes</h3>
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

                                    <td>{{$vente->produit_id }}</td>
                                    <td>{{$vente->produit_id}}</td>

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
