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

//Route::get('/posts/{post}', 'PostsController@show');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/about', function(){
    //$articles = App\Article::all();
    //$articles = App\Article::take(2)->get();
    //$articles = App\Article::paginate(2);
    //$articles = App\Article::latest()->get();
    $articles = App\Article::take(3)->latest()->get();

    return view('about', [
        'articles' => $articles
    ]);
});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
// Route::get('/articles/{article}/edit', 'ArticlesController@edit');
// Route::get('/articles/{article}', 'ArticlesController@update');

// GET /articles
// GET /articles/:id
// POST /articles
// PUT /articles/:id
// DELETE /articles/:id