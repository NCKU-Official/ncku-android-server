<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('category/{category_id}/posts/create', 'PostController@create');
Route::get('category/{category_id}/posts', 'PostController@index');
Route::post('category/{category_id}/posts/store', 'PostController@store');

Route::get('/', [
    'as' => 'category/all/posts', 'uses' => 'PostController@index'
]);

// Route::get('/', function () {
//     return view('welcome');
// });
