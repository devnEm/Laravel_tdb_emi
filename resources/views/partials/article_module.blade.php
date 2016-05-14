<article>


    <div class="panel panel-default">
        <div class="panel-body">
            <p>
            <h2><a href="{{ url('redaction/article', $post->id ) }}" >{!! $post->titre !!}</a></h2>
            <label>Crée le : </label> {{$post->created_at->formatLocalized('%d %B %Y')}}
            <label>Nombre de vues : </label> {{$post->view}}
            </p>
            <p>
                <strong>{!! $post->intro !!}</strong>
            </p>
            <p>
                {!! substr($post->article,0,255) !!}<a href="{{ url('redaction/article', $post->id ) }}" > ... lire la suite</a>
            </p>
        </div>
    </div>
</article>
<hr>