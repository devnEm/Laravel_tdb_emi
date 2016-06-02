@extends('layouts.admin')

@section('content')


    <div class="row">
            <div class="col-md-12">
            <div class="panel panel-default">
            <label>Mes utilisateurs</label>
                <table class="table">
                    <thead>
                        <td>Nom</td>
                        <td>mail</td>
                        <td>crée le</td>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->formatLocalized('%d %B %Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
    </div>
    <div class="row">
            <div class="col-md-4">
            <div class="panel panel-default">
                <label>Mes liens</label>
                <table class="table">
                    <thead>
                        <td>Nom</td>
                        <td>lien</td>

                    </thead>
                    <tbody>


                            @foreach($liens as $lien)
                                <tr>
                            <td>{{$lien->titre}}</td>
                            <td><a href="{{$lien->url}}" target="blank" alt='{{$lien->titre}}'>c'est parti</a></td>
                                </tr>
                            @endforeach


                    </tbody>
                </table>
            </div>
            </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <label>Mes Messages</label>
                <table class="table">
                    <thead>
                    <td>Sujet</td>
                    <td>Utilisateur</td>
                    <td>Statut</td>
                    <td>Voir</td>
                    </thead>
                    <tbody>
                    @foreach($requests as $request)

                            <tr>
                                @if($request->statut == 'new')
                                    <td><strong>{{$request->titre}}</strong></td>
                                    <td><strong>{{$request->user->name}}</strong></td>
                                    <td><strong>{{$request->statut}}</strong></td>
                                @elseif($request->statut == 'fait')
                                    <td><small><i>{{$request->titre}}</i></small></td>
                                    <td><small><i>{{$request->user->name}}</i></small></td>
                                    <td><small><i>{{$request->statut}}</i></small></td>
                                @else
                                    <td>{{$request->titre}}</td>
                                    <td>{{$request->user->name}}</td>
                                    <td>{{$request->statut}}</td>
                                @endif

                                <td>><a href="{{url('/requete',$request->id)}}">voir</a></td>
                            </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        </div>
        <div class="row">

        </div>


    {{Html::script('js/index.js')}}
@endsection