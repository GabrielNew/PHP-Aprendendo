<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

Route::get('/', HomeController::class);

Route::get('produtos/inserir', [ProdutosController::class, 'create']);

Route::get('produtos/{nome}/{preco?}', [ProdutosController::class, 'show']);

Route::get('produtos', [ProdutosController::class, 'index']);
