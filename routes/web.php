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

    $article = \App\Models\Article::all();

    return $article;
    return view('about');
});
//Route::get('/welcome', 'App\Http\Controllers\Controller@welcome');
//Route::get('/{item}', 'App\Http\Controllers\MainController@show');



//{item} is what comes after the url is typed
