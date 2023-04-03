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

    $nome = "Fabio";
    $arr = [1,2,3,4,5];

    $passaros = ['calopsita', 'canario', 'jhonson'];

    return view('welcome',
        [
        'nome' => $nome,
        'arr'=> $arr,
        'passaros' => $passaros
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function(){
    return view('products');
});