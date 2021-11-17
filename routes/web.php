<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


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

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum'])->get('/api/categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::middleware(['auth:sanctum'])->post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/categoria/actualizar', [CategoriaController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/api/cliente', [ClienteController::class, 'index'])->name('cliente');
Route::middleware(['auth:sanctum'])->post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/cliente/eliminar', [ClienteController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/api/detfactura', [DetFacturaController::class, 'index'])->name('detfactura');
Route::middleware(['auth:sanctum'])->post('/api/detfactura/registrar', [DetFacturaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/detfactura/actualizar', [DetFacturaController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/detfactura/eliminar', [DetFacturaController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/api/factura', [FacturaController::class, 'index'])->name('factura');
Route::middleware(['auth:sanctum'])->post('/api/factura/registrar', [FacturaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/factura/actualizar', [FacturaController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/factura/eliminar', [FacturaController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/api/marca', [MarcaController::class, 'index'])->name('marca');
Route::middleware(['auth:sanctum'])->post('/api/marca/getmarca', [MarcaController::class, 'getMarca']);
Route::middleware(['auth:sanctum'])->post('/api/marca/registrar', [MarcaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/marca/actualizar', [MarcaController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/marca/eliminar', [MarcaController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/api/producto', [ProductoController::class, 'index'])->name('producto');
Route::middleware(['auth:sanctum'])->post('/api/producto/registrar', [ProductoController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/producto/actualizar', [ProductoController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/producto/eliminar', [ProductoController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/api/vendedor', [VendedorController::class, 'index'])->name('vendedor');
Route::middleware(['auth:sanctum'])->post('/api/vendedor/registrar', [VendedorController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/vendedor/actualizar', [VendedorController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/vendedor/eliminar', [VendedorController::class, 'destroy']);

