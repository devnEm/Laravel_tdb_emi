@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Mon Suivi total</div>

                                <div class="panel-body">
                                    <label>Gazette</label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 4em;width: {{$percentTotalGazette}}%">
                                            {{round($percentTotalGazette,2)}} %
                                        </div>
                                    </div>
                                    <label>Verticaux</label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 4em;width: {{$percentTotalVerticaux}}%">
                                            {{round($percentTotalVerticaux,2)}} %
                                        </div>
                                    </div>
                                    <label>Evenement</label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 4em;width: {{$percentTotalEvenement}}%">
{{round($percentTotalEvenement,2)}} %
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Portrait</div>

                                <div class="panel-body">
                                    <label>Total</label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="2" aria-valuemax="100" style="min-width: 4em;width: {{($avenants->sum('realise'))/$avenants->sum('objectif')*100}}%">
                                            {{round(($avenants->sum('realise'))/$avenants->sum('objectif')*100, 2)}} %
                                        </div>
                                    </div>
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
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mes Chiffres </div>

                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                    <td>Mois</td>
                                    <td>Support</td>
                                    <td>Atteints</td>
                                    <td>RAF</td>
                                    </thead>
                                    <tbody>
                                    @foreach($avenants as $avenant)
                                    @if(($avenant->produit->mois->id)>= $month)
                                    <tr>
                                        <td>{{$avenant->produit->mois->label}}</td>
                                        <td>{{$avenant->produit->support->label}}</td>
                                        <td><div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 4em;width:{{($avenant->realise)/($avenant->objectif)*100}}%">{{round(($avenant->realise)/($avenant->objectif)*100,2)}} %</td>
                                        <td>{{number_format(($avenant->objectif)-($avenant->realise), 2, ',', ' ')}}</td>
                                    </tr>
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
