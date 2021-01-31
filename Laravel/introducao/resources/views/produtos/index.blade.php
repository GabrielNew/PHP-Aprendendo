@extends('layouts.template')
@section('title','Produtos')
@section('content')
<div class="container">
<h1>Página dos produtos</h1>
    @foreach($produtos as $produto)
    <p>{{$produto->nome}}</p>
    @endforeach

    {{$produtos->links()}}
</div>
@endsection