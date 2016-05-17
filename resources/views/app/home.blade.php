@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Bienvenue " {{Auth::user()->name}} "</h4></div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Mon suivi total</h4></div>

                                    <div class="panel-body">

                                        <label>Gazette</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow={{round($percentTotalGazette,2)}} aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: {{$percentTotalGazette}}%">
                                                {{round($percentTotalGazette,2)}}%
                                            </div>
                                        </div>
                                        <hr>
                                        <label>Verticaux</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{round($percentTotalVerticaux,2)}}" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: {{$percentTotalVerticaux}}%">
                                                {{round($percentTotalVerticaux,2)}}%
                                            </div>
                                        </div>
                                        <hr>
                                        <label>Evenement</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: {{$percentTotalEvenement}}%">
                                                {{round($percentTotalEvenement,2)}}%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Commercial</h4></div>

                                    <div class="panel-body">
                                        <label><h3>Total</h3></label>
                                        <div class="progress" id="progress-total">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="2" aria-valuemax="100" style="min-width: 2em;width: {{($avenants->sum('realise'))/$avenants->sum('objectif')*100}}%">
                                                {{round(($avenants->sum('realise'))/$avenants->sum('objectif')*100, 2)}}%
                                            </div>
                                        </div>

                                        <hr>
                                        <br>
                                        <table class="table">
                                            <tr>
                                                <td>Nombres de ventes :</td>
                                                <td>{{$ventes->count()}}</td>                                                </tr>
                                            <tr>
                                                <td>Chiffre total à faire : </td>
                                                <td>{{number_format($avenants->sum('objectif'), 2, ',', ' ')}} €</td>                                </tr>
                                            <tr>
                                                <td>Chiffre total réalisé : </td>
                                                <td>{{number_format($avenants->sum('realise'), 2, ',', ' ')}} €</td>                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Trimestre</h4></div>

                                    <div class="panel-body">
                                        T1:
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="2" aria-valuemax="100" style="min-width: 2em;width: {{$t1}}%">
                                                {{round($t1)}}%
                                            </div>
                                        </div>
                                        <label>T2</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="2" aria-valuemax="100" style="min-width: 2em;width: {{$t2}}%">
                                                {{round($t2)}}%
                                            </div>
                                        </div>
                                        <label>T3</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="2" aria-valuemax="100" style="min-width: 2em;width: {{$t3}}%">
                                                {{round($t3)}}%
                                            </div>
                                        </div>
                                        <label>T4</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="2" aria-valuemax="100" style="min-width: 2em;width: {{$t4}}%">
                                                {{round($t4)}}%
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Chiffres d'Affaire</h4></div>

                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <td><label>Mois</label></td>
                                        <td><label>Support</label></td>
                                        <td><label>Atteints</label></td>
                                        <td><label>RAF</label></td>
                                        </thead>
                                        <tbody>
                                        @foreach($avenants as $avenant)
                                            @if(($avenant->produit->mois->id)>= $month)
                                                @if(($avenant->produit->mois->id)<= $month+3)
                                                <tr>
                                                    <td>{{$avenant->produit->mois->label}}</td>
                                                    <td>{{$avenant->produit->support->label}}</td>
                                                    <td><div class="progress">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 3em;width:{{($avenant->realise)/($avenant->objectif)*100}}%">{{round(($avenant->realise)/($avenant->objectif)*100,2)}} %</td>
                                                    <td>{{number_format(($avenant->objectif)-($avenant->realise), 2, ',', ' ')}}</td>
                                                </tr>
                                                @endif
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
