@extends('layouts.adminLayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="panel-body">
                        {{Form::open(array('url' =>'notifications/notify','method'=>'POST','id'=>'notify_form'))}}
                        {{Form::label('notify_text','texte : ')}}
                        {{Form::text('notify_text')}}
                        {{Form::submit('Ajouter')}}
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="message">

                </div>
            </div>
        </div>
    </div>

    <script>


        var pusher = new Pusher("{{env("PUSHER_KEY")}}", {
            encrypted: true
        });



        var channel = pusher.subscribe('test_channel');
        channel.bind('my_event', function(data) {
            //console.log(data.text);
            toastr.success(data.text, null, {"positionClass": "toast-bottom-left"});
            //alert(data.text);
            //showNotification(data.text);
        });



    </script>



@endsection