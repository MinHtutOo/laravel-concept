<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/post/{id}/{title}', function ($id,$title) {
    return "Post id is " . $id . " and title is " . $title;
});

Route::get("/create/cart/show/item/cake", array('as'=>'show.fd',function(){
    $url = route('show.fd');
    return "The url is " . $url;
}));

Route::get('/post', 'App\Http\Controllers\PostsController@index');
Route::get('/contact', 'App\Http\Controllers\PostsController@contact');
Route::get('/post/{username}/{password}', 'App\Http\Controllers\PostsController@contact');
Route::resource('/post','App\Http\Controllers\PostsController');

*/

Route::get('/home/{name}/{country}', 'App\Http\Controllers\PostsController@home');
Route::get('/about','App\Http\Controllers\PostsController@about');
Route::get('/contact','App\Http\Controllers\PostsController@contact');




