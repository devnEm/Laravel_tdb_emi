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


                                @include('partials.article_module')

                            @elseif($post->isPublic)

                                @include('partials.article_module')

                        
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        

        @if (Auth::check())

            @include('partials.project_module')

        @endif
    </div>
</div>

@endsection
