<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('welcome');
});

Route::get('/about', function () {

    $articles = \App\Models\Article::all();
    return view('about',[
        'articles'=> $articles
    ]);
});

/*Route::get('/articles', function(){
    $articles = \App\Models\Article::all();
    return view('articles', [
        'articles' => $articles
    ]);
});*/

Route::get('/articles',
    'App\Http\Controllers\ArticlesController@index');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show');
//Route::get('/welcome', 'App\Http\Controllers\Controller@welcome');
//Route::get('/{item}', 'App\Http\Controllers\MainController@show');



//{item} is what comes after the url is typed
