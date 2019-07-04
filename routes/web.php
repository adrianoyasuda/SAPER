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


Route::get('/', 'HomeController@listar');
Route::post('/home', 'HomeController@postQuestion');

Route::get('/tads', 'TadsController@listar');
Route::get('/fis', 'FisController@listar');
Route::get('/mamb', 'MambController@listar');
Route::get('/mec', 'MecController@listar');
Route::get('/sociais', 'SociaisController@listar');
Route::get('/humor', 'HumorController@listar');
Route::get('/diversos', 'DiversosController@listar');

Route::get('/grafico','GraficoController@plotar');
Route::get('/relatorio','UserController@gerarRelatorio');

Route::post('/', 'MailController@enviar');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Auth::routes();

