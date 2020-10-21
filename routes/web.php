<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/articles','App\Http\Controllers\ArticlesController@index'); //show list of articles
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store'); //store new article
Route::get('/articles/create','App\Http\Controllers\ArticlesController@create'); //create new article

Route::get('/dropdown', 'App\Http\Controllers\MainController@dropdown');
Route::get('/findbook', 'App\Http\Controllers\MainController@findbook')->name('findbook');
Route::get('/findyear', 'App\Http\Controllers\MainController@findyear')->name('findyear');


Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show'); //show one article
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit'); //edit article
Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update');//go to update
//Route::get('/welcome', 'App\Http\Controllers\Controller@welcome');
//Route::get('/{item}', 'App\Http\Controllers\MainController@show');



//{item} is what comes after the url is typed

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/hi', function(){
    return view('test.index');
});