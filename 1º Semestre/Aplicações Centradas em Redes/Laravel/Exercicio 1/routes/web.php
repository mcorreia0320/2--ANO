<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;



Route::get('/', [ProdutosController::class,'welcome']);
Route::get('/produtos', [ProdutosController::class,'index']);
Route::get('/produtos/create', [ProdutosController::class,'create']);
Route::get('/detalhes/{id}', [ProdutosController::class,'show']);
Route::post('/produtos', [ProdutosController::class,'store']);
Route::delete('/produtos/{id}', [ProdutosController::class,'destroy']);





