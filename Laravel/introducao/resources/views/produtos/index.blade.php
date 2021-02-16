@extends('layouts.template')
@section('title','Produtos')
@section('content')
<div class="container">
<a href="{{route('produtos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>
<table>
<thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Estoque</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->estoque}}</td>
                <td>
                    <a title="Detalhes" href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-eye text-primary mr-1"></i></a>
                    <a title="Editar" href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                    <a title="Excluir" href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
</table>
    <!-- @foreach($produtos as $produto)
    <p>{{$produto->nome}}</p>
    @endforeach -->

    {{$produtos->links()}}
</div>
@endsection