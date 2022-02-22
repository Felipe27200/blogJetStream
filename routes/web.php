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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Para asignarle un middleware a la ruta, se usa el método con el mismo nombre
y como argumentos recibe el alias del middleware que se va a usar */
Route::get('prueba', function () {
    return "Acceso Logrado";
})->middleware('age');

Route::get('no-autorizado', function (){
    return "Usted no es mayor de edad";
});
