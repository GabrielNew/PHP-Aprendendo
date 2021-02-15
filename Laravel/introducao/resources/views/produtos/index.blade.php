@extends('layouts.template')
@section('title','Produtos')
@section('content')
<div class="container">
<a href="produtos/inserir" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>
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
                <td></td>
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