<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use App\Models\Categorie;

use Auth;
use Validator;

class BlogController extends Controller
{

    public function index(){
        $posts = Post::all();
        $categories = Categorie::all();
        return view('blog.index',['posts'=>$posts,'categories'=>$categories]);
    }

    public function redaction()
    {

        $posts = Post::all();
        $categories = Categorie::all();

        return view('blog.redaction',['posts'=>$posts,'categories'=>$categories]);
    }

    public function showPost($id)
    {
        $post = Post::where('id', $id)->first();
        
        $post->view += 1;
        $post->update();

        return view('blog.post',['post'=>$post]);
    }

    public function createPost()
    {
        $posts = Post::all();
        $categories_label = Categorie::all()->pluck('label');

        return view('blog.createPost',['posts'=>$posts,'categories_label'=>$categories_label]);
    }

    public function deletePost($id)
    {
        $post = Post::where('id',$id)->delete();
        

        return redirect()->action('BlogController@redaction');
    }

    public function editPost($id)
    {
        $post = Post::where('id',$id)->first();
        $categories_label = Categorie::all()->pluck('label');

        return view('blog.editPost',['post'=>$post,'categories_label'=>$categories_label]);
    }

    public function updatePost($id, Request $request)
    {
        $article = Post::where('id',$id)->first();

        $rules=[
            'titre' => 'required',
            'article' => 'required'
        ];

        $validator= Validator::make($request->all(),$rules);

        $article->titre=$request->input('titre');
        $article->article=$request->input('article');
        $article->intro=$request->input('intro');

        if($request->input('isPublic') == null){

            $article->isPublic=0;

        }else{

            $article->isPublic=$request->input('isPublic');
        }

        $categorie_id=Categorie::select()
            ->where('id', ($request->input('categorie'))+1)->value('id');

        $article->categorie_id=$categorie_id;

        $article->update();

        return redirect()->action('BlogController@redaction');
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

        return redirect()->action('BlogController@redaction');
    }

    public function getAllPosts()
    {

        return view('postAdmin');
    }


    public function createCategory()
    {
        
        $categories = Categorie::all();

        return view('blog.createCategory',['categories'=>$categories]);
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

        return redirect()->action('BlogController@redaction');
    }
}
