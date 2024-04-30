<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\EmpleadorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;


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
    return view('inicio');
});


Route::get('/empleados', [EmpleadorController::class, 'verEmpleados'])->name('detodo.verEmpleados');

Route::get('/productos', [ProductoController::class, 'verProductos'])->name('detodo.verProductos');

Route::get('/proveedores', [ProveedorController::class, 'verProveedores'])->name('detodo.verProveedores');

Route::get('/crearEmpleados', [EmpleadorController::class, 'crearEmpleados'])->name('detodo.crearEmpleados');

Route::get('/crearProductos', [ProductoController::class, 'crearProductos'])->name('detodo.crearProductos');

Route::get('/crearProveedores', [ProveedorController::class, 'crearProveedores'])->name('detodo.crearProveedores');

Route::get('/guardarEmpleados', [EmpleadorController::class, 'guardarEmpleados'])->name('detodo.guardarEmpleados');

Route::get('/guardarProductos', [ProductoController::class, 'guardarProducto'])->name('detodo.guardarProducto');

Route::get('/guardarProveedores', [ProveedorController::class, 'guardarProveedor'])->name('detodo.guardarProveedor');


