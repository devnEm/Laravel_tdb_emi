@extends('layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>ICI le panneau d'administration générale</h1>

                @foreach($users as $user)
                <label>{{$user->name}}</label>
                @endforeach
            </div>
        </div>
    </div>


@endsection