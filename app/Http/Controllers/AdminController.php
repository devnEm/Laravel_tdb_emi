<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use Auth;
use Validator;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin');
    }

    public function redaction()
    {

        return view('redaction');
    }

    public function createPost()
    {
        $posts = Post::all();

        return view('createPost',['posts'=>$posts]);
    }

    public function storePost(Request $request)
    {
        $user_id= Auth::user()->id;

        $rules=[
            'titre' => 'required',
            'article' => 'required'
        ];

        $validator= Validator::make($request->all(),$rules);

        $article = new Post();
        $article->titre=$request->input('titre');
        $article->article=$request->input('article');
        $article->user_id= $user_id;

        $article->save();

        $posts = Post::all();

        return redirect()->action('AdminController@createPost');
    }

    public function getAllPosts()
    {

        return view('postAdmin');
    }
}
