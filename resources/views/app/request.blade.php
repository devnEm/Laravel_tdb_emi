@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-defalut">
				{{Form::open(array('url' =>'requete','method'=>'POST'))}}

				{{Form::label('titre','Sujet : ')}}
				{{Form::text('titre')}}

				{{Form::label('message','Message : ')}}
				{{Form::textarea('message')}}

				{{Form::submit('envoyer')}}
				{{Form::close()}}
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-defalut">
				
				<table class="table">
					<thead>
						<td>Sujet</td>
						<td>Statut</td>
						<td></td>
					</thead>
					<tbody>
					@foreach($requests as $request)
						<tr>
                            @if($request->statut == 'new')
                                <td><strong>{{$request->titre}}</strong></td>
                                <td><strong>{{$request->statut}}</strong></td>
                            @else
                                <td>{{$request->titre}}</td>
                                <td>{{$request->statut}}</td>
                            @endif
                            	<td><a href="{{url('/reponse',$request->id)}}">voir</a></td>                                
                        </tr>
					@endforeach						
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</div>

@endsection