@extends('layouts.adminLayout')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Bienvenue</h4></div>

                <div class="panel-body">

                    @foreach ($posts as $post)

                        @if($post->categorie->label !== 'commercial')
                        
                            @if(Auth::check())


                                @include('partials.article_module')

                            @elseif($post->isPublic)

                                @include('partials.article_module')

                        
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Liens</h4></div>
                @foreach($liens as $lien)
                    <ul class="nav">

                        @if($lien->statut == 'isPublic')

                            <li><a href="{{$lien->url}}" target="blank" alt='{{$lien->titre}}' class="btn btn-info">{{$lien->titre}}</a></li>


                        @endif

                    </ul>
                @endforeach
                <div class="panel-body">
                </div>
            </div>
        </div>
        

        @if (Auth::check())

            @include('partials.project_module')

        @endif
    </div>
</div>


@include ('partials.footer')
<script>
    console.log(foo); // bar
    console.log(user); // User Obj
    console.log(age); // 29
</script>


@endsection
