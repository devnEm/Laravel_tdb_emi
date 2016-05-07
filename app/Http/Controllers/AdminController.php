<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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

        return view('createPost');
    }

    public function getAllPosts()
    {

        return view('postAdmin');
    }
}
