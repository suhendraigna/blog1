<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy('id', 'desc')->paginate(5);

        return view('article.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
        // return view('article', ['slug' => $slug]);
        return view('article.single', compact('article'));
    }

    public function create(){
        return view('article.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:4|max:255',
            'subject' => 'required|min:10'
        ]);

        // $article = new Article;
        // $article->title = $request->title;
        // $article->subject = $request->subject;
        // $article->save();

        Article::create([
            'title' => $request->title,
            'subject' => $request->subject
        ]);

        return redirect('/article');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update($id, Request $request){
        $request->validate([
            'title' => 'required|min:4|max:255',
            'subject' => 'required|min:10'
        ]);

        Article::findOrFail($id)->update([
            'title' => $request->title,
            'subject' => $request->subject
        ]);

        return redirect('/article/');
    }

    public function destroy($id){
        Article::findOrFail($id)->delete();
        return redirect('/article/');
    }
}
