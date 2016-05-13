@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-defalut">
				{{Form::open(array('url' =>'requete/reponse'.$request->id,'method'=>'POST'))}}

				{{Form::label('reponse','Réponse : ')}}
				{{Form::textarea('repponse')}}

				{{Form::submit('envoyer')}}
				{{Form::close()}}
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-defalut">
				<label>{{$request->titre}}</label>
				<p>emis par : {{$request->user->name}}</p>
				<p>Message : {{$request->message}}</p>
			</div>
		</div>
		
	</div>
</div>

@endsection