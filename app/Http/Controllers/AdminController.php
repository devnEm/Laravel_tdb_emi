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
    public function index()
    {

        return view('admin');
    }

    public function redaction()
    {

        $posts = Post::all();
        $categories = Categorie::all();

        return view('redaction',['posts'=>$posts,'categories'=>$categories]);
    }

    public function showPost($id)
    {
        $post = Post::where('id', $id)->first();
        

        return view('post',['post'=>$post]);
    }

    public function createPost()
    {
        $posts = Post::all();
        $categories_label = Categorie::all()->pluck('label');

        return view('createPost',['posts'=>$posts,'categories_label'=>$categories_label]);
    }

    public function storePost(Request $request)
    {
        $user_id= Auth::user()->id;

        $rules=[
            'titre' => 'required',
            'article' => 'required'
        ];

        $validator= Validator::make($request->all(),$rules);

        // echo('<pre>');
        // var_dump($request->input('isPublic'));
        // echo('</pre>'); die;

        $article = new Post();
        $article->titre=$request->input('titre');
        $article->article=$request->input('article');
        $article->intro=$request->input('intro');

        if($request->input('isPublic') == null){

            $article->isPublic=0;

        }else{

            $article->isPublic=$request->input('isPublic');
        }


        
        $article->user_id= $user_id;
        

        $categorie_id=Categorie::select()
            ->where('id', ($request->input('categorie'))+1)->value('id');

        $article->categorie_id=$categorie_id;

        $article->save();

        $posts = Post::all();

        return redirect()->action('AdminController@createPost');
    }

    public function getAllPosts()
    {

        return view('postAdmin');
    }


    public function createCategory()
    {
        
        $categories = Categorie::all();

        return view('createCategory',['categories'=>$categories]);
    }

    public function storeCategory(Request $request)
    {
        $user_id= Auth::user()->id;

        $rules=[
            'label' => 'required',
        ];

        $validator= Validator::make($request->all(),$rules);

        // echo('<pre>');
        // var_dump($request->input('isPublic'));
        // echo('</pre>'); die;

        $category = new Categorie();
        $category->label=$request->input('label');
        
        $category->save();

        return redirect()->action('AdminController@createCategory');
    }


}
