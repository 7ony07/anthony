<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepreciacionController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\activoController;


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

Auth::routes();
// En tu archivo routes/web.php

//formulario
Route::get('formulario.crear.guardar',[FormularioController::class,'crear'])->name('formulario.crear');

//guardar datos a la BD
Route::post('formulario.crear.guardar', [FormularioController::class,'guardar'])->name('formulario.guardar');

// routes/web.php

Route::get('/activo',  [activoController::class,'crear'])->name('activo.crear');
Route::post('/activo',  [activoController::class,'guardar'])->name('activo.guardar');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





