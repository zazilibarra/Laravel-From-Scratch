<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    //Render a list of a resource
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    //Show a single resource
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    //Shows a view to create a new resource
    public function create()
    {
        return view('articles.create');
    }

    //Persist the new resource
    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    //Show a view to edit an existing resource
    public function edit()
    {
        
    }

    //Persist the edited resource
    public function update()
    {
        
    }

    //Delete the resource
    public function destroy()
    {
        
    }
}