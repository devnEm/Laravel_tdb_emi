@extends('layouts.main')

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


            @if(Auth::check())
                @if (Auth::user()->isAdmin)

                    @include('partials.admin.project_module')

                @endif
            @endif
        </div>
    </div>



@endsection
