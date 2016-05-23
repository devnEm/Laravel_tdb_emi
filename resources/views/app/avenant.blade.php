@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Mon avenant</h4></div>
                    <div class="panel-body">
                        <table class="table table-condensed">
                            <thead>
                                <td><label>Mois</label></td>
                                <td><label>Support</label></td>
                                <td><label>Montant</td>
                                <td><label>Réalisé</label></td>
                                <td><label>Action</label></td>
                            </thead>
                        <tbody>
                        @foreach($avenants as $avenant)
                            <tr>
                                                                            
                                <td>{{$avenant->produit->mois->label}}</td>
                                <td>{{$avenant->produit->support->label}}</td>
                                        
                                <td>{{number_format($avenant->objectif, 2, ',', ' ')}}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width:{{($avenant->realise)/($avenant->objectif)*100}}%">{{round(($avenant->realise)/($avenant->objectif)*100,2)}} %
                                        </div>
                                    </div>
                                </td>
                                <td><a class="del" href="{{ url('avenant/delete', $avenant->id ) }}"><button>supprimer</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                        </div>
                        </div>
                        

                        <div class="panel panel-default">
                            <div class="panel-heading"><h4>Ajouter un avenant</h4></div>
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
    {{Html::script('js/index.js')}}
@endsection