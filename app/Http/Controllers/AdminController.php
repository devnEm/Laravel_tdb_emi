<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Models\Requete;

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

    public function createRequest(){

        $user_id = Auth::user()->id;

        $requests= Requete::where('user_id', $user_id)->get();

        return view('app.request',['requests'=>$requests]);

    }

    public function storeRequest(Request $request){

        $rules=[
            'titre' => 'required',
            'message' => 'required'
        ];
 
        $validator= Validator::make($request->all(),$rules);

        $requete = new Requete();
        $requete->titre=$request->input('titre');
        $requete->message=$request->input('message');
        $requete->user_id= Auth::user()->id;
        $requete->statut = 'new' ;

        $requete->save();


        return redirect()->action('AdminController@createRequest');

    }

    


}
