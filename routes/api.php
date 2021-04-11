<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', 'ArticleController@index');

Route::get('articles/{id}', 'ArticleController@show');

Route::post('article', 'ArticleController@store');

Route::put('article', 'ArticleController@store');

Route::delete('article/{id}', 'ArticleController@destroy');


Route::get('products', 'ProductController@index');

Route::get('products/{id}', 'ProductController@show');

Route::post('products', 'ProductController@store');

Route::put('products', 'ProductController@store');


Route::delete('products/{id}', 'ProductController@destroy');
