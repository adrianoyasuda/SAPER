<?php

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
    return view('home');
});


Route::post('/', 'HomeController@listar');
Route::post('/', 'HomeController@postQuestion');


Route::get('/tads', function () {
    return view('tads');
});

Route::get('/mamb', function () {
    return view('mamb');
});

Route::get('/mec', function () {
    return view('mec');
});

Route::get('/fis', function () {
    return view('fis');
});

Route::get('/soc', function () {
    return view('soc');
});

Route::get('/humor', function () {
    return view('meme');
});

Route::get('/b', function () {
    return view('diversos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Auth::routes();

