@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Entradas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Entradas</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Localização</th>
          <th>Fornecedor</th>
          <th>Marca</th>
          <th>Tipo de Embalagem</th>
          <th>Cor</th>
          <th>Textura ou Viscosidade</th>
          <th>Peso Bruto</th>
          <th>Data de Entrada</th>
          <th>Data de Validade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<br>
@stop

@section('js')
<script>
  $(function () {
    $('#table').DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@stop