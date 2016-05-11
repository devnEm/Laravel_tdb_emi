<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Post;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::all();

        return view('welcome', ['posts'=>$posts]);
    }
}
