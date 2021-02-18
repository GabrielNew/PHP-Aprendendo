<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller {
    
    public function index(){
        $produtos = produto::paginate();
        return view('produtos.index',['produtos'=> $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function insert(){

    }

    public function show($id){
        $produto = Produto::find($id);
        return view('produtos.show',['produto' => $produto]);
    }

    // public function show($nome, $preco = null){
    //     return view('produtos.show', ['nome' => $nome, 'preco' => $preco]);
    // }
}
