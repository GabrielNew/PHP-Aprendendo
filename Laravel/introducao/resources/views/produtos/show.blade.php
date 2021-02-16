@extends('layouts.template')
@section('title','Produto')
@section('content')
    <h1>Produto <?php echo $produto->nome ?></h1>
    <h2>com preço de <?php echo $produto->valor ?></h2>
    <h3><?php echo $produto->descricao ?></h3>
    <h5><?php echo $produto->descricao_longa ?></h5>
@endsection