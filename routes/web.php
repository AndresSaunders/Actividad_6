<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {   
    return view('welcome');
});

Route::get('/Productos', function () {   
    return view('Productos.index');
});

Route::get('/Productos/crear', function () {   
    return view('Productos.create');
});

Route::get('/Productos/editar', function () {   
    return view('Productos.edit');
});

Route::get('/Productos/crear',[ProductoController::class,'crear']);
Route::get('/Productos/editar',[ProductoController::class,'editar']);
Route::get('/Productos',[ProductoController::class,'index']);