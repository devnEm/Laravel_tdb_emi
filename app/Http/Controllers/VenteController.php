<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

use App\Models\Produit;
use App\Models\Vente;
use App\Models\Mois;
use App\Models\Support;
use App\Models\Avenant;

use Carbon\Carbon;

class VenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    
    public function create()
    {
        $user_id = Auth::user()->id;

        $mois_label= Mois::all()->pluck('label');
        $support_label= Support::all()->pluck('label');

        $ventes= Vente::select()->where('user_id',$user_id)->get();



        return view('app.vente',['mois_label'=>$mois_label,'support_label'=>$support_label,'ventes'=>$ventes]);
    }



    /**
     * Store a new vente.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user_id= Auth::user()->id;

        $rules=[
            'client' => 'required',
            'montant' => 'required',
            'produit_id' => 'required'
        ];
 
        $validator= Validator::make($request->all(),$rules);

        $vente = new Vente();
        $vente->client=$request->input('client');
        $vente->montant=$request->input('montant');
        $vente->user_id= $user_id;

        $mois_id=Mois::select()
            ->where('id', ($request->input('mois'))+1)->value('id');

        $support_id=Support::select()
            ->where('id', ($request->input('support'))+1)->value('id');

        $produit_id = Produit::select()
            ->where('mois_id', $mois_id)
            ->where('support_id', $support_id)
            ->value('id');
        
        $vente->produit_id=$produit_id;
        
        $vente->save();

        /********************************
        /
        /     UPDATE AVENANT After Saving 
        /
        /*******************************/

        $realise=intval($request->input('montant'));

        // echo('<pre>');
        // echo($realise);
        // echo('</pre>');die;

        $avenant=Avenant::select('realise')->where('produit_id',$produit_id)->where('user_id',$user_id)->increment('realise', $realise);
        
        // echo('<pre>');
        // var_dump($avenant);
        // echo('</pre>');die;
        

        

        return redirect()->action('VenteController@create');
    }

     public function delete($v)
    {
        
        $vente = Vente::where('id',$v)->delete();
        

        return redirect()->action('VenteController@create');
    }
}
