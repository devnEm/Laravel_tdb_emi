<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use App\Models\Lien;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $liens= Lien::all();
        $posts = Post::all();

        return view('welcome', ['posts'=>$posts,'liens'=>$liens]);
    }
    public function cv(){
        return view ('cv');
    }
    
}
