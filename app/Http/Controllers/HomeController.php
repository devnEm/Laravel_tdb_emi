<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Avenant;
use App\Vente;
use App\Produit;
use App\Support;
use Auth;
use Carbon\Carbon;


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

        $month = Carbon::now()->month;

        $ventes= Vente::select()->where('user_id',$user_id)->get();
        $avenants= Avenant::select()->where('user_id',$user_id)->get();

        $objectifTotalGazette=Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('objectif');
        $objectifTotalVerticaux=Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('objectif');
        $objectifTotalEvenement=Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('objectif');

        $realiseTotalGazette=Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('realise');
        $realiseTotalVerticaux=Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('realise');
        $realiseTotalEvenement=Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('realise');

        $rafTotalGazette=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('objectif'))-(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('realise'));
        $rafTotalVerticaux=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('objectif'))-(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('realise'));
        $rafTotalEvenement=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('objectif'))-(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('realise'));

        $percentTotalGazette=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('objectif'))*100;
        $percentTotalVerticaux=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('objectif'))*100;
        $percentTotalEvenement=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('objectif'))*100;


        

        // var_dump($totalGazetteOb);die;
        
        return view('home',['avenants'=>$avenants,'ventes'=>$ventes,'month'=>$month,'percentTotalGazette'=>$percentTotalGazette,'percentTotalVerticaux'=>$percentTotalVerticaux,'percentTotalEvenement'=>$percentTotalEvenement]);

    }




}
