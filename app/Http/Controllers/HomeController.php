<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\Avenant;
use App\Models\Vente;
use Auth;
use Carbon\Carbon;

use JavaScript;


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

        /***************************************
         *
         * Calcul des objectifs totaux par support
         *
         * ****************************************/
        $percentTotalGazette=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('objectif'))*100;
        $percentTotalVerticaux=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('objectif'))*100;
        $percentTotalEvenement=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('objectif'))*100;

        /***************************************
         *
         * Calcul des objectifs totaux par trimestre
         *
         * ****************************************/
        $trim1= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,2,3,4,5,6,7,8,9])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,2,3,4,5,6,7,8,9])->sum('objectif'))*100;
        $trim2= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[10,11,12,13,14,15,16,17,18])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[10,11,12,13,14,15,16,17,18])->sum('objectif'))*100;
        $trim3= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[19,20,21,22,23,24,25,26,27])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[19,20,21,22,23,24,25,26,27])->sum('objectif'))*100;
        $trim4= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[28,29,30,31,32,33,34,35,36])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[28,29,30,31,32,33,34,35,36])->sum('objectif'))*100;

        JavaScript::put([
            'trim1' => round($trim1,2),
            'trim2' => round($trim2,2),
            'trim3' => round($trim3,2),
            'trim4' => round($trim4,2),
            'gazette' => round($percentTotalGazette,2),
            'verticaux' => round($percentTotalVerticaux,2),
            'evenement' => round($percentTotalEvenement,2)

        ]);

        // var_dump($totalGazetteOb);die;
        
        return view('app.home',['avenants'=>$avenants,'ventes'=>$ventes,'month'=>$month,'percentTotalGazette'=>$percentTotalGazette,'percentTotalVerticaux'=>$percentTotalVerticaux,'percentTotalEvenement'=>$percentTotalEvenement,"t1"=>$trim1,"t2"=>$trim2,"t3"=>$trim3,"t4"=>$trim4,]);

    }




}
