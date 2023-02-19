<?php
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProductoController;
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

//index route
Route::get('/', function () {
    return view('welcome');
});

//tienda routes
Route::get('tienda/registrar',[TiendaController::class, 'create'])->name('tienda.create');

Route::post('tienda/guardar',[TiendaController::class,'store'])->name('tienda.store');

Route::get('tienda/listar',[TiendaController::class,'index'])->name('tienda.index');

//producto routes

Route::get('producto/registrar',[ProductoController::class, 'create'])->name('producto.create');

Route::post('producto/guardar',[ProductoController::class,'store'])->name('producto.store');

Route::get('producto/listar',[ProductoController::class,'index'])->name('producto.index');

Route::get('producto/{producto}/editar',[ProductoController::class,'edit'])->name('producto.edit');

Route::put('producto/{producto}/actualizar',[ProductoController::class,'update'])->name('producto.update');

Route::get('producto/{producto}/detalle',[ProductoController::class, 'show'])->name('producto.show');

Route::delete('producto/{producto}/eliminar',[ProductoController::class, 'destroy'])->name('producto.destroy');
