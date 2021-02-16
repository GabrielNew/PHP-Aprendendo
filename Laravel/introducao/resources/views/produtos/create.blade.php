@extends('layouts.template')
@section('title','Criar Produto')
@section('content')
<div class="container">
    <form method="post" >
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" id="" name="nome">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Estoque</label>
        <input type="text" class="form-control" id="" name="estoque">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Valor</label>
        <input type="text" class="form-control" id="" name="valor">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Descrição</label>
        <textarea class="form-control" name="descricao" id="" rows="3"></textarea>
    </div>
    <br>
    <center>
        <button type="submit" class="btn btn-primary">Submit</button>
    </center>
    
    </form>
</div>
@endsection