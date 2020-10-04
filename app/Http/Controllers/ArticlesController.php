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
        request()->validate([ 
            'title'=>['required','min:3', 'max:255'], //require input, 3-255 characs
            'excerpt'=>'required',
            'body'=>'required'
        ]);

        $article = new Article(); //initiating row to table 
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article-> save();

        return redirect('/articles'); //after submit, return to another page
    }

    public function edit($id) //show a view to edit an existing resource
    {
        $article = Article::find($id); //identify which article
        return view('articles.edit', compact('article'));
    }

    public function update($id) //persist/update the edited resource
    {
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'], //require input, 3-255 characs
            'excerpt' => 'required',
            'body' => 'required'
        ]);
        
        $article = Article::find($id); //find article to update
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        //return view('/articles'); //after submit, return to another page
        return view('articles.show', ['article' => $article]); //reference folder and file
    }

    public function destroy() //to delete the list/article/resource
    {
        # code...
    }

}
