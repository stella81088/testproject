<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    // 7 Restful controller actions
    
    public function index() //render a list
    {
        $articles = Article::latest()->get();
        return view('articles.index', ['articles'=>$articles]);
    }
    public function show($id) //show one thing from a list
    {
        $article = Article::find($id);
        return view('articles.show', ['article'=>$article]); //reference folder and file
    }

    public function create() //show view to create a new resource (e.g submit form)
    {
        return view('articles.create');
    }

    public function store() //persist the create form
    {
        # code...
    }

    public function edit() //show a view to edit an existing resource
    {
        # code...
    }

    public function update() //persist/update the edited resource
    {
            
    }

    public function destroy() //to delete the list/article/resource
    {
        # code...
    }

}
