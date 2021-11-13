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