@extends('layouts.template')
@section('title','Produtos')
@section('content')

<?php
@session_start();
if (@$_SESSION['id_usuario']==null) {
    echo "<script language='javascript'> window.location='./'</script>";
}
if (!isset($id)) {
    $id = "";
} 
?>

<div class="container">
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <a title="Editar" href="{{route('produtos.edit', $produto)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                    <a title="Excluir"  href="{{route('produtos.modal', $produto)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
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
</div>
</div>

</div>

<!-- Modal -->
<div class="container">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Deseja realmente excluir este Produto?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <form action="{{route('produtos.delete', $id)}}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<?php
  if (@$id != "") {
    echo "<script>
      var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
      document.onreadystatechange = function () {
        myModal.show();
      };
    </script>";
  } 
?>

@endsection