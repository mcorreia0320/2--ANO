<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

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

Route::get('/', [CarroController::class, 'welcome']);

Route::get('/carros', [CarroController::class,'carros']);

Route::get('/detalhes/{id}', [CarroController::class,'detalhes']);

Route::get('/contactos', [CarroController::class,'contactos']);


