<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Mail;
use Auth;
use Validator;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $users = User::get();

        return view('admin',['users'=> $users]);
    }

    public function sendRegisterEmail(Request $request, $id)
    {

    	
        $user = User::findOrFail($id);

        Mail::send('emails.register', ['user' => $user], function ($m) use ($user) {
        	
            $m->from('test@app.com', 'CatBackup_');

            $m->to($user->email, $user->name)->subject('Register Key');
        });

        
    }

    


}
