@extends('layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
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
            <div class="col-md-6">
            <div class="panel panel-default">
                <label>Mes liens</label>
                <table class="table">
                    <thead>
                        <td>Nom</td>
                        <td>lien</td>
                        
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>CZECH</td>
                            <td><a href="http://www.czechav.com/members/login/?next=/members/" target="blank" alt='CZECH'>c'est parti</a></td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="panel panel-default">
                <label>Mes Message</label>
                <table class="table">
                    <thead>
                        <td>Sujet</td>
                        <td>Utilisateur</td>
                        <td>Statut</td>
                        <td>Voir</td>
                    </thead>
                    <tbody>
                    @foreach($requests as $request)
                        @if($request->statut != 'done')
                            <tr>
                            @if($request->statut == 'new')
                                <td><strong>{{$request->titre}}</strong></td>
                                <td><strong>{{$request->user->name}}</strong></td>
                                <td><strong>{{$request->statut}}</strong></td>
                            @else
                                <td>{{$request->titre}}</td>
                                <td>{{$request->user->name}}</td>
                                <td>{{$request->statut}}</td>
                            @endif
                                
                                <td>><a href="{{url('/requete',$request->id)}}">voir</a></td>
                            </tr>
                        @endif
                    @endforeach                     
                    </tbody>
                </table>
                
            </div>
            </div>
    </div>
@endsection