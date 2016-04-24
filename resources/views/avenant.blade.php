@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mon avenant
                        <button class="btn-info pull-right">Editer</button>
                    </div>


                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <td>Mois</td>
                            <td>Support</td>
                            <td>Montant</td>
                            <td>Points</td>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Mars</td>
                                <td>Evenements</td>
                                <td>2000 €</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>Mars</td>
                                <td>Gazette</td>
                                <td>2000 €</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>Mars</td>
                                <td>Verticaux</td>
                                <td>2000 €</td>
                                <td>250</td>
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
@endsection