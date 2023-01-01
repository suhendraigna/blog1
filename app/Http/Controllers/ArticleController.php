<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy('id', 'desc')->paginate(6);

        return view('article.index', compact('articles'));
    }

    public function show($slug){
        $article = Article::where('slug', $slug)->first();

        if($article == null){
            abort(404);
        }
        // return view('article', ['slug' => $slug]);
        return view('article.single', compact('article'));
    }

    public function create(){
        return view('article.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|unique:articles|min:4|max:255',
            'subject' => 'required|min:10',
            'thumbnail' => 'mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        // $article = new Article;
        // $article->title = $request->title;
        // $article->subject = $request->subject;
        // $article->save();

        $imgName = $request->thumbnail->getClientOriginalName().'-'.time().'.'.$request->thumbnail->extension(); 
        $request->thumbnail->move(public_path('thumbnail'), $imgName);

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subject' => $request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect('/article');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update($id, Request $request){
        $validation = Article::where('title', $request->title)->first();
        $article = Article::findOrFail($id);
        if($validation &&  $validation->id != $article->id){
            $request->validate([
                'title' => 'required|unique:articles|min:4|max:255',
                'subject' => 'required|min:10',            
                'thumbnail' => 'mimes:jpeg,jpg,png,gif,svg|max:2048'
            ]);
        }

        $request->validate([
            'title' => 'required|min:4|max:255',
            'subject' => 'required|min:10',
            'thumbnail' => 'mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $imgName = null;

        if($request->thumbnail){
            $imgName = $request->thumbnail->getClientOriginalName().'-'.time().'.'.$request->thumbnail->extension(); 
            $request->thumbnail->move(public_path('thumbnail'), $imgName);
        }

        Article::findOrFail($id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
            'thumbnail' => $imgName,
        ]);

        return redirect('/article/');
    }

    public function destroy($id){
        Article::findOrFail($id)->delete();
        return redirect('/article/');
    }
}