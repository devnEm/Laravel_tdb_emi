<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Categorie;

use Auth;
use Validator;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    
    public function index()
    {

        return view('admin');
    }

    


}
