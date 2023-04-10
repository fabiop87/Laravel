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
use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index']); // mostrar todos os registros
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']); // mostrar um dado especifico
Route::post('/events', [EventController::class, 'store']); // enviar os dados para o banco


Route::get('/contact', function () {
    return view('contact');
});



















// Route::get('/produtos', function(){

//     $busca = request('search');


//     return view('products', ['busca' => $busca]);
// });

// Route::get('/produtos_teste/{id?}', function($id = null){
//     return view('product', ['id' => $id]);
// });

