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
                                <div class="panel-heading">Mon Suivi</div>

                                <div class="panel-body">
                                    <label>Evenement</label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            40%
                                        </div>
                                    </div>
                                    <label>Verticaux</label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            50%
                                        </div>
                                    </div>
                                    <label>Gazette</label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
90%
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
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{($avenant->sum('realise'))/$avenant->sum('objectif')*100}}%">
                                            {{($avenant->sum('realise'))/$avenant->sum('objectif')*100}}
                                        </div>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td>Nombres de ventes :</td>
                                            <td>{{$ventes->count()}}</td>                                                </tr>
                                        <tr>
                                            <td>Chiffre total à faire : </td>
                                            <td>{{$avenant->sum('objectif')}} €</td>                                </tr>
                                        <tr>
                                            <td>Chiffre total réalisé : </td>
                                            <td>{{$avenant->sum('realise')}} €</td>                                </tr>
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
                                    @foreach($avenant as $avenant)
                                    <tr>
                                        <td>{{$avenant->produit->mois->label}}</td>
                                        <td>{{$avenant->produit->support->label}}</td>
                                        <td><div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{($avenant->realise)/($avenant->objectif)*100}}%">{{($avenant->realise)/($avenant->objectif)*100}} %</td>
                                        <td>{{($avenant->objectif)-($avenant->realise)}}</td>
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
    </div>
</div>
@endsection
