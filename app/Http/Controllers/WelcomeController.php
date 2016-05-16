<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use App\Models\Lien;
use App\Models\User;

use JavaScript;


class WelcomeController extends Controller
{
    public function welcome()
    {
        JavaScript::put([
            'foo' => 'bar',
            'user' => User::first(),
            'age' => 29
        ]);

        $liens= Lien::all();
        $posts = Post::all();

        return view('welcome', ['posts'=>$posts,'liens'=>$liens]);
    }


    
}
