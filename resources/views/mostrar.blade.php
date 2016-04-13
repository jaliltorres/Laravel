@extends('layout.layoutbase')

@section('head')
<title>Egresados - Registro</title>
@stop

@section('content')

<br>
  <div class="col-sm-12" align="center">
    <h3 align="center"><strong>Mostrando Egresados</strong></h3>
    <hr style="height: 2px; width:50%; background-color: #c72020;">
  </div>
<br>

<div class="table table-responsive">
  <table class="table table-striped">
<thead>
  <tr>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Marteno</th>
  </tr>
</thead>
<tbody>

      <?php foreach ($egresados as $egresado):  ?>
  <tr>
    <td><?=$egresado['nombre']?></td>
    <td><?=$egresado['paterno']?></td>
    <td><?=$egresado['materno']?></td>
  </tr>
    <?php endforeach ?>

</tbody>
</table>
</div>


        <div class="col-sm-12" align="center">
          <hr style="height: 2px; width:50%; background-color: #c72020;">
        </div>


  @stop

  @section('footer')

  @stop
