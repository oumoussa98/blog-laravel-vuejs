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

//Route::get('/','WelcomeController@index') ;

Route::any('/welcome3', function () {

    return view('welcome3');
    
});



Route::get('/welcome2', 'WelcomeController@welcome2' ) ;

Route::get('/test', function () {

    return view('posts.test');
    
});


Route::get('/', 'WelcomeController@home' ) ;
Route::get('posts/{id}/preview', 'WelcomeController@show' ) ;
Route::get('posts', 'WelcomeController@index' ) ;


Route::get('/dashboard', 'PostController@index' ) ;
Route::get('posts/create', 'PostController@create' ) ;
Route::post('posts', 'PostController@store' ) ;
Route::get('posts/{id}/edit', 'PostController@edit' ) ;
Route::put('posts/{id}', 'PostController@update' ) ;
Route::delete('posts/{id}', 'PostController@destroy' ) ;
Route::get('posts/category/{category}', 'CategoryController@store' ) ;
Route::get('categories', 'CategoryController@index') ;



 Auth::routes() ;

 Route::get('/home', 'HomeController@index')->name('home');
