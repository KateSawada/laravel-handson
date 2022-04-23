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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/handson', 'App\Http\Controllers\HandsonController@index');
Route::get('/new', function () {
    return File::get(public_path("static/new.html"));
});
Route::get('/task', 'App\Http\Controllers\TaskController@index');
Route::get('/task/details/{id}', 'App\Http\Controllers\TaskController@details');
