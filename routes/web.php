<?php
use App\Http\Controllers\TiendaController;
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

Route::get('tienda/registrar',[TiendaController::class, 'create'])->name('tienda.create');

Route::post('tienda/guardar',[TiendaController::class,'store'])->name('tienda.store');