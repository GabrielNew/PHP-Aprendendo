<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller {
    
    public function index(){
        $produtos = produto::orderby('id','desc')->paginate();
        return view('produtos.index',['produtos'=> $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function insert(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function show($id){
        $produto = Produto::find($id);
        return view('produtos.show',['produto' => $produto]);
    }

    // public function show($nome, $preco = null){
    //     return view('produtos.show', ['nome' => $nome, 'preco' => $preco]);
    // }
}
