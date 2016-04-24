<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AvenantController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create()
    {


//        echo ('<pre>');
//        var_dump($ventes);
//        echo ('</pre>');die;

        return view('avenant');
    }



    public function store(Request $request)
    {


        $this->validate($request, [
            'client'=>'required',
            'montant' => 'required',
            'mois' => 'required',
            'support' => 'required',
        ]);

        // Store the blog post...
    }
}
