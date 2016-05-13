<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;
use Validator;

use App\Http\Requests;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function profil()
    {
        $user = User::where('id',Auth::user()->id)->first();

        return view('profil.profil',['user'=> $user]);
    }

    public function updateProfil(Request $request, $id)
    {
        $user = User::where('id',$id)->first();

        $rules=[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
 
        $validator= Validator::make($request->all(),$rules);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->update();

        return redirect()->action('WelcomeController@welcome');
    }

}
