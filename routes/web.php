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

Route::get('/contato', function () {
    return view('contato');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/qs', function () {
    return view('qs');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/noticias', function () {
    return view('noticias');
});



 
echo '<a href="/home"> Home </a>';
echo '<a href="/contato"> Contato </a>';
echo '<a href="/qs"> Quem Somos? </a>';
echo '<a href="/noticias"> Noticias </a>';

