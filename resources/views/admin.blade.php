@extends('layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
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
            <div class="col-md-6">
                <label>Mes liens</label>
                <table class="table">
                    <thead>
                        <td>Nom</td>
                        <td>lien</td>
                        
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>CZECH</td>
                            <td><a href="http://www.czechav.com/members" target="blank" alt='CZECH'>c'est parti</a></td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection