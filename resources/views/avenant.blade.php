@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                

                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mon avenant
                            <button class="btn-info pull-right">Editer</button>
                        </div>


                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <td>N°</td>
                                <td>Mois</td>
                                <td>Support</td>
                                <td>Montant</td>
                                <td>Réalisé</td>
                                </thead>
                                <tbody>


                                @foreach($avenants as $avenant)
                                <tr>
                                    <td>{{$avenant->id}}</td>
                                        
                                    <td>{{$avenant->produit->mois->label}}</td>
                                    <td>{{$avenant->produit->support->label}}</td>
                                        
                                    <td>{{number_format($avenant->objectif, 2, ',', ' ')}}</td>
                                    <td><div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 4em;width:{{($avenant->realise)/($avenant->objectif)*100}}%">{{round(($avenant->realise)/($avenant->objectif)*100,2)}} %</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        
                        </div>
                        <div class="row">

                        <div class="panel panel-default">
                            <div class="panel-heading">Ajouter un avenant</div>
                            <div class="panel-body">

                                <div class="form-group">

                                    {{Form::open(array('url' =>'avenant','method'=>'POST'))}}

                                    <div class="form-group">

                                    {{Form::label('mois','Mois : ')}}
                                    {{ Form::select('mois', $mois_label, null,['label'=>'label']) }}
                                    </div>

                                    <div class="form-group">

                                    {{Form::label('support','Support : ')}}
                                    {{ Form::select('support', $support_label, null,['label'=>'label']) }}

                                    </div>
                                    <div class="form-group">

                                    {{Form::label('objectif','Objectif : ')}}
                                    {{Form::number("objectif")}}

                                    </div>
                                    <div class="form-group">

                                    {{Form::label('points','Points : ')}}
                                    {{Form::number("points")}}

                                    </div>

                                    {{Form::submit('Ajouter',['class'=>'btn pull-right'])}}
                                    {{Form::close()}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection