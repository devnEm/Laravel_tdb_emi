<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

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
        $users = User::get();

        return view('admin',['users'=> $users]);
    }

    


}
