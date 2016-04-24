<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Produit;
use App\Vente;
use Carbon\Carbon;

class VenteController extends Controller
{

    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create()
    {
        $produits = Produit::all();
        $ventes = Vente::all();
        $time =Carbon::now();

//        echo ('<pre>');
//        var_dump($ventes);
//        echo ('</pre>');die;

        return view('vente',['produits'=>$produits,'ventes'=>$ventes,'time'=>$time]);
    }



    /**
     * Store a new vente.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'montant' => 'required',
            'mois' => 'required',
            'support' => 'required',
        ]);

        // Store the blog post...
    }
}
