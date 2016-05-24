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

                                        <canvas id="trimestre" width="200" height="200"></canvas>

                                        <table id="myTable" class="table">
                                            <tr>
                                                <td>Ventes :</td>
                                                <td>{{$ventes->count()}}</td>
                                            </tr>
                                            <tr>
                                                <td>Objectif total : </td>
                                                <td>{{number_format($avenants->sum('objectif'), 2, ',', ' ')}} €</td>
                                            </tr>
                                            <tr>
                                                <td>R A F : </td>
                                                <td>{{number_format($avenants->sum('realise'), 2, ',', ' ')}} €</td>
                                            </tr>
                                        </table>

                                        <canvas id="support" width="200" height="200"></canvas>

                                    </div>
                                </div>
                            </div>


                        <div class="col-md-8">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Chiffres d'Affaire</h4></div>

                                <div class="panel-body">
                                    <table id="myTable" class="table">
                                        <thead>
                                        <td><label>Mois</label></td>
                                        <td><label>Support</label></td>
                                        <td><label>Atteints</label></td>
                                        <td><label>RAF</label></td>
                                        </thead>
                                        <tbody>
                                        @foreach($avenants as $avenant)
                                            @if(($avenant->produit->mois->id)>= $month)
                                                <tr>
                                                    <td>{{$avenant->produit->mois->label}}</td>
                                                    <td>{{$avenant->produit->support->label}}</td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 3em;width:{{($avenant->realise)/($avenant->objectif)*100}}%">{{round(($avenant->realise)/($avenant->objectif)*100,2)}} %</div>
                                                        </div>
                                                    </td>
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
    </div>
    {{Html::script('js/app.js')}}
@endsection
@include('partials.footer')



