<?php

namespace App\Http\Controllers;

use App\Article;

class PagesController extends Controller
{
    public function hello()
    {
        return redirect('/home');
    }
    public function index()
    {
        return redirect('/articles');
    }
    public function show($id)
    {
        $articles = Article::find($id);
        return view('article', compact('articles'));
    }
}
