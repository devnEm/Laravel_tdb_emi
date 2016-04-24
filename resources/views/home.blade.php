@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">


                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Suivi</div>

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
                            <div class="panel-heading">Mes Ventes </div>

                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                    <td>Mois</td>
                                    <td>Support</td>
                                    <td>Atteints</td>
                                    <td>RAF</td>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Mars</td>
                                        <td>Evenements</td>
                                        <td>80 %</td>
                                        <td>2000 €</td>
                                    </tr>
                                    <tr>
                                        <td>Mars</td>
                                        <td>Gazette</td>
                                        <td>80 %</td>
                                        <td>2000 €</td>
                                    </tr>
                                    <tr>
                                        <td>Mars</td>
                                        <td>Verticaux</td>
                                        <td>80 %</td>
                                        <td>2000 €</td>
                                    </tr>
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
