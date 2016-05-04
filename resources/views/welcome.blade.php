@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Bienvenue</div>

                <div class="panel-body">
                    <h3>Application de gestion des objectifs commerciaux.</h3>
                    <label>Progression</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            60%
                        </div>
                    </div>
                    <article>
                        <h4><label>On avance</label></h4>
                        <p>Il reste encore à intégrer les fonctions de suppression et certainement quelques fonctionnalités oubliées.</p>
                        <p>Mais surtout il n'y a pas le retour <strong>en fonction des Trimestres</strong>. J'envisage un filtrage des données et ....</p>
                    </article>
                    <article>
                        <h4><label>On continue</label></h4>
                        <p>Les fonction de suppression ont été ajouté.</p><p> Une amélioration de la présentation a été effectué.</p>
                        <p>Et surtout un filtrage sur le mois courant sur la page d'accueil ainsi qu'un retour des objectifs totaux des supports</p>
                    </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
