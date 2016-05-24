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
         * Calcul des pourcentage totaux réalisés par support
         *
         * ****************************************/
        if(Avenant::where('user_id',$user_id)->sum('objectif') == 0)
        {
            $percentTotalGazette= 0;
            $percentTotalVerticaux= 0;
            $percentTotalEvenement= 0;
        }
        else
        {

        $percentTotalGazette=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,4,7,10,13,16,19,22,25,28,31,34])->sum('objectif'))*100;
        $percentTotalVerticaux=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[2,5,8,11,14,17,20,23,26,29,32,35])->sum('objectif'))*100;
        $percentTotalEvenement=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('realise'))/(Avenant::where('user_id',$user_id)->whereIn('produit_id',[3,6,9,12,15,18,21,24,27,30,33,36])->sum('objectif'))*100;

        }
        
        /***************************************
         *
         * Calcul des objectifs totaux réalisés par trimestre
         *
         * ****************************************/

        if(Avenant::where('user_id',$user_id)->sum('objectif') == 0)
        {
            $trim1= 0;
            $trim2= 0;
            $trim3= 0;
            $trim4= 0;
            $totalRealise= 0;
        }
        else
        {
        $trim1_real= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,2,3,4,5,6,7,8,9])->sum('realise'));
        $trim1_obj = (Avenant::where('user_id',$user_id)->whereIn('produit_id',[1,2,3,4,5,6,7,8,9])->sum('objectif'));

        $trim2_real= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[10,11,12,13,14,15,16,17,18])->sum('realise'));
        $trim2_obj=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[10,11,12,13,14,15,16,17,18])->sum('objectif'));

        $trim3_real= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[19,20,21,22,23,24,25,26,27])->sum('realise'));
        $trim3_obj=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[19,20,21,22,23,24,25,26,27])->sum('objectif'));

        $trim4_real= (Avenant::where('user_id',$user_id)->whereIn('produit_id',[28,29,30,31,32,33,34,35,36])->sum('realise'));
        $trim4_obj=(Avenant::where('user_id',$user_id)->whereIn('produit_id',[28,29,30,31,32,33,34,35,36])->sum('objectif'));

        $totalRealise= Avenant::where('user_id',$user_id)->sum('realise')/Avenant::where('user_id',$user_id)->sum('objectif')*100;
        }

        JavaScript::put([
            'trim1_real' => round($trim1_real,2),
            'trim2_real' => round($trim2_real,2),
            'trim3_real' => round($trim3_real,2),
            'trim4_real' => round($trim4_real,2),
            'trim1_obj' => round($trim1_obj,2),
            'trim2_obj' => round($trim2_obj,2),
            'trim3_obj' => round($trim3_obj,2),
            'trim4_obj' => round($trim4_obj,2),
            'gazette' => round($percentTotalGazette,2),
            'verticaux' => round($percentTotalVerticaux,2),
            'evenement' => round($percentTotalEvenement,2),
            'total' => $totalRealise
        ]);

        
        return view('app.home',['avenants'=>$avenants,'ventes'=>$ventes,'month'=>$month,'percentTotalGazette'=>$percentTotalGazette,'percentTotalVerticaux'=>$percentTotalVerticaux,'percentTotalEvenement'=>$percentTotalEvenement]);

    }




}
