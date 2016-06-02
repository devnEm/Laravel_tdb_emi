@extends('layouts.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">

				{{Form::open(array('url' =>'requete','method'=>'POST'))}}
				<div class="form-group">
				{{Form::label('titre','Sujet : ')}}
				{{Form::text('titre')}}
				</div>
				<div class="form-group">
				{{Form::label('message','Message : ')}}
				{{Form::textarea('message')}}
				</div>
				<div class="form-group">
				{{Form::submit('envoyer')}}
				{{Form::close()}}

				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				
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