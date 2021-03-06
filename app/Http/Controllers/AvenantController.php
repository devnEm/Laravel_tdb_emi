<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;

use App\Models\Avenant;
use App\Models\Produit;
use App\Models\Mois;
use App\Models\Support;

class AvenantController extends Controller
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


        $avenants= Avenant::select()->where('user_id',$user_id)->orderBy('produit_id','asc')->get();

        return view('app.avenant',[
            'mois_label'=>$mois_label,
            'support_label'=>$support_label,
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
 
        Validator::make($request->all(),$rules);

        $avenant = new Avenant();
        $avenant->objectif=$request->input('objectif');
        $avenant->points=$request->input('points');
        $avenant->user_id= $user_id;

        $mois_id=Mois::select()
            ->where('id', ($request->input('mois'))+1)->value('id');

        $support_id=Support::select()
            ->where('id', ($request->input('support'))+1)->value('id');

        $produit_id = Produit::select()
            ->where('mois_id', $mois_id)
            ->where('support_id', $support_id)
            ->value('id');

         $avenant->produit_id=$produit_id;
        

        $avenant->save();

        return redirect()->action('AvenantController@create');

        
    }

    public function delete($v)
    {
        
        Avenant::where('id',$v)->delete();

        return redirect()->action('AvenantController@create');
    }
}
