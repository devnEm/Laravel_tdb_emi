<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\App;
use App\Http\Broadcast\TestEvent;

class NotificationController extends Controller
{
    public function getIndex()
    {

        return view('notification');
    }

    public function postNotify(Request $request)
    {
        $notifyText = e($request->input('notify_text'));


        // TODO: Get Pusher instance from service container
        $pusher = App::make('pusher');

        // TODO: The notification event data should have a property named 'text'
        $pusher->trigger( 'test-channel',
            'test-event',
            array('text' => $notifyText));
        // TODO: On the 'notifications' channel trigger a 'new-notification' event

        //event(new TestEvent('Broadcasting in Laravel using Pusher!'));

        return redirect()->action('NotificationController@getIndex');
    }
}
