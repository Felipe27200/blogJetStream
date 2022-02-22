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
})->middleware(['auth:sanctum', 'age']); // Se usa un segundo middleware que es el primer argumento,
// valida si la sesión fue iniciada, o si no redirecciona al login, esto para evitar que el middleware
// age intente acceder a la propiedad de un objeto que no existe, en este caso, el de user

Route::get('no-autorizado', function (){
    return "Usted no es mayor de edad";
});
