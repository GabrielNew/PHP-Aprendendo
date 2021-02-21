@extends('layouts.template')
@section('title','Editar Produto')
@section('content')
<div class="container">
    <form method="post" action="{{route('produtos.editar', $produto)}}">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="" name="nome" value="{{$produto->nome}}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Estoque</label>
                <input type="text" class="form-control" id="" name="estoque" value="{{$produto->estoque}}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Valor</label>
                <input type="text" class="form-control" id="" name="valor" value="{{$produto->valor}}">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <textarea class="form-control" name="descricao" id="" rows="3">{{$produto->descricao}}</textarea>
        </div>     
    </div>
    <br>
    <center>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </center>
    
    </form>
</div>
@endsection