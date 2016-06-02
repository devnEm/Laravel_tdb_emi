<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>Les Projets</h4></div>
        <div class="panel-body">
            <h4>Application de gestion des objectifs commerciaux.</h4>
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
                    @include('partials.article_module')
                @endif
            @endforeach

            <h4>Le blog</h4>
            <hr>
            <h4><label>Etat d'avancement : </label></h4>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    60%
                </div>
            </div>
            <hr>
            @foreach ($posts as $post)
                @if($post->categorie->label == 'redaction')
                    @include('partials.article_module')
                @endif
            @endforeach
            <h4>La Todo-List</h4>
            <hr>
            <h4><label>Etat d'avancement : </label></h4>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                </div>
            </div>
            <hr>
            @foreach ($posts as $post)
                @if($post->categorie->label == 'todo')
                    @include('partials.article_module')
                @endif
            @endforeach
        </div>
    </div>
</div>
