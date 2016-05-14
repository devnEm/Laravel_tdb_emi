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
        $requests = Requete::get();

        return view('admin.admin',['users'=> $users],['requests'=>$requests]);
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

    public function showRequest($id){

        

        $request= Requete::where('id', $id)->first();

        $request->statut = 'lu';
        $request->update();

        return view('admin.request',['request'=>$request]);

    }

    public function storeResponse(Request $request, $id){

        

        $rules=[
            
            'reponse'=>'required'
        ];
 
        $validator= Validator::make($request->all(),$rules);

        $requete = Requete::where('id',$id)->first();

        $requete->reponse=$request->input('reponse');
        $requete->statut = 'done' ;

        $requete->update();


        return redirect()->action('AdminController@index');

    }
    public function showResponse($id){

        $request= Requete::where('id', $id)->first();

        return view('app.reponse',['request'=>$request]);

    }

    


}
