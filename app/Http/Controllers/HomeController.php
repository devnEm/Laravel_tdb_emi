<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Avenant;
use App\Vente;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        $ventes= Vente::select()->where('user_id',$user_id)->get();
        $avenant= Avenant::select()->where('user_id',$user_id)->get();

        return view('home',['avenant'=>$avenant,'ventes'=>$ventes]);

    }




}
