<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where yu can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wel', function () {
    return view('welcome2');
});

Route::get('/test', function () {
    return "Web programming: back end";
});

Route::get('/welcome/{id}', function () {
    return view('welcome3');
});

Route::get('/student/{id}', "StudentController@index");

Route::get('/name', function () {
    return view('welcome3', ['name' => 'Nurzhas']);
});

Route::get('/user/{name}', function ($name) {
    return view('welcome3', compact('name'));
});

