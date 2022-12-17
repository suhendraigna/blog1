<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article');
    }

    public function show($slug){
        return view('article', ['slug' => $slug]);
    }
}
