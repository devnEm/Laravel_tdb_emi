@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading"><h4>Bienvenue</h4></div>

                <div class="panel-body">

                    @foreach ($posts as $post)

                    @if($post->categorie->label !== 'commercial')
                        
                        @if(Auth::check())
                            

                            <article>
                            
                                
                                <h4><label>{{$post->titre}}</label></h4>
                                <p>Catégorie : {{ $post->categorie->label }}</p>
                                <p>{{$post->intro}}</p>


                            </article>
                            <hr>

                            @elseif($post->isPublic)
                            <article>
                                <h4><label>{{$post->titre}}</label></h4>
                                <p>Catégorie : {{ $post->categorie->label }}</p>
                                <p>{{$post->intro}}</p>
                            </article>
                            <hr>
                        
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        

                    @if (Auth::check())
                    <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading"><h4>Commercial</h4></div>

                <div class="panel-body">
                    <h2>Application de gestion des objectifs commerciaux.</h2>
                    <br>
                    <hr>
                    <h4><label>Etat d'avancement : </label></h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                            75%
                        </div>
                    </div>
                    <hr>
                        @foreach ($posts as $post)
                            
                        
                            @if($post->categorie->label == 'commercial')
                            <article>
                            <h4><label>{{$post->titre}}</label></h4>
                            <p>Catégorie : {{ $post->categorie->label }}</p>
                            <p>{{$post->intro}}</p>
                            <hr>
                            
                            </article>
                            @endif
                        
                        @endforeach
                        


                    <!-- <article>
                        <h4><label>On avance ...</label></h4>
                        <p>Il reste encore à intégrer les fonctions de suppression et certainement quelques fonctionnalités oubliées.</p>
                        <p>Mais surtout il n'y a pas le retour <strong>en fonction des Trimestres</strong>. J'envisage un filtrage des données et ....</p>
                    </article>
                    <hr>
                    <article>
                        <h4><label>On continue ...</label></h4>
                        <p>Les fonctions de suppression ont été ajouté.</p><p> Une amélioration de la présentation a été effectué.</p>
                        <p>Et surtout un filtrage sur le mois courant sur la page d'accueil ainsi qu'un retour des objectifs totaux des supports</p>
                    </article>
                    <hr>
                    <article>
                        <h4><label>On habille ...</label></h4>
                        <p>La mise en place d'un CSS adapté à l'entreprise <a href="http://www.infopro-digital.com/" target="blank">InfoproDigital</a> vient d'être ajouté.</p>

                    </article>
                    <hr> -->
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
