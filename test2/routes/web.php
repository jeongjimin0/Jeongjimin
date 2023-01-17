<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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




Route::get('/create', function() {
  return view('create');
});


Route::post('/post','PostController@update');


Route::get('/', function(){
  return view('contact');
});

Route::get('/hello', function(){
  return view('hello');
});

Route::get('/welcome', function(){
  return view('welcome');
});

Route::get('/text', function(){
  return view('text');
});

Route::get('/test', function(){
  return view('test');
});

Route::get('/test1', function(){
  return view('test1');
});
