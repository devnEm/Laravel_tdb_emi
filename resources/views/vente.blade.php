@extends('layouts.app')
 
@section('content')

    <div class="container">
        
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Ajouter une vente</h4></div>

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
                                {{ Form::label('montant','Montant :') }}
                                {{ Form::number('montant') }}
                            </div>
                            <div class="form-group" >
                                {{ Form::label('client','Client :') }}
                                {{ Form::text('client') }}
                            </div>

                            {{ Form::submit('Enregistrer',['class'=>'btn pull-right']) }}

                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Toutes mes ventes</h4></div>

                        <div class="panel-body">
                            
                            <table class="table">
                                <thead>
                                <td><label>Client</label></td>
                                <td><label>Mois</label></td>
                                <td><label>Support</label></td>
                                <td><label>Montant</label></td>
                                {{--<td>Action</td>--}}
                                </thead>
                                <tbody>
                                @foreach($ventes as $vente)
                                <tr>

                                    <td>{{ $vente->client }}</td>

                                    <td>{{$vente->produit->mois->label }}</td>
                                    <td>{{$vente->produit->support->label}}</td>

                                    <td>{{number_format($vente->montant, 2, ',', ' ')}}</td>
                                    <td><a href="{{ url('vente/delete', $vente->id ) }}"><button>supprimer</button></a></td>

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
