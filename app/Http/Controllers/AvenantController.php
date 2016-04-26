<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;

use App\Avenant;
use App\Produit;
use App\Mois;
use App\Support;

class AvenantController extends Controller
{
    

    public function create()
    {

        $mois_label= Mois::all()->pluck('label');
        $support_label= Support::all()->pluck('label');


        $avenants= Avenant::all();

        


        return view('avenant',[
            'mois'=>$mois_label,
            'support'=>$support_label,
            'avenants'=>$avenants
            
            ]);
    }



    public function store(Request $request)
    {


        $user_id= Auth::user()->id;

        $rules=[
            'objectif' => 'required',
            'points' => 'required',
            'produit_id' => 'required'
        ];
 
        $validator= Validator::make($request->all(),$rules);

        $avenant = new Avenant();
        $avenant->objectif=$request->input('objectif');
        $avenant->points=$request->input('points');
        $avenant->user_id= $user_id;

        // echo('<pre>');
        // var_dump($request->input('support_id'));
        // echo('</pre>');die;

        $mois_id=Mois::select()
            ->where('id', ($request->input('mois_id')+1))->pluck('id');

        $support_id=Support::select()
            ->where('id', ($request->input('support_id')+1))->pluck('id');

        // echo('<pre>');
        // var_dump($mois_id);
        // echo('</pre>');die;

        $produit_id = Produit::select('id')
            ->where('mois_id', $mois_id)
            ->where('support_id', $support_id)
            ->value('id');

        // $produit_id=Produit::select('id')
        // ->where('mois',$request->input('produit_mois'))
        // ->where('support',$request->input('produit_support'));

        // echo('<pre>');
        // var_dump($produit_id);
        // echo('</pre>');die;

         $avenant->produit_id=$produit_id;
        

        $avenant->save();

        return redirect()->action('AvenantController@create');

        
    }
}
