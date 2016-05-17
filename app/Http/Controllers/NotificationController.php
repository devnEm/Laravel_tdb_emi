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
        $pusher = App::make('pusher');
        $notifyText = e($request->input('notify_text'));

        $pusher->trigger( 'test-channel',
            'test-event',
            array('text' => $notifyText));


        return redirect()->action('NotificationController@getIndex');
    }
}
