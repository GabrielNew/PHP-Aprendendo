<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

Route::get('/', HomeController::class);

Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');

Route::get('produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');

//Route::get('produtos/{nome}/{preco?}', [ProdutosController::class, 'show'])->name('produtos.descricao');

Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');
