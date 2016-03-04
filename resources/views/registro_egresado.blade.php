@extends('layout.layoutbase')

@section('head')
<title>Egresados - Registro</title>
@stop

@section('content')

<br>
  <div class="col-sm-12" align="center">
    <h3 align="center"><strong>REGISTRO DE EGRESADO</strong></h3>
    <hr style="height: 2px; width:50%; background-color: #c72020;">
  </div>
<br>

  <div class="col-sm-12" align="center">
    <form class="col-sm-12 form-horizontal" role="form">
        <div class="form-group">
          <label class="control-label col-sm-4" for="nombre">Nombre(s):</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre(s)">
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="apepat">Paterno:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="apepat" placeholder="Apellido paterno">
        </div>
        <label class="control-label col-sm-1" for="apemat">Materno:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="apemat" placeholder="Apellido materno">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="celular">Celular:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="celular" placeholder="722  XXX XXXX">
        </div>
        <label class="control-label col-sm-1" for="correo">Correo:</label>
        <div class="col-sm-2">
          <input type="email" class="form-control" id="correo" placeholder="correo@jamones.com">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="celular">Carrera:</label>
        <div class="col-sm-2">
          <select multiple class="form-control input-sm" name="carrera" id="carrera">
            <option value="0">Ingeniería</option>
            <option value="1">Ing. Gestión Empresarial</option>
            <option value="2">Ing. Electrónica</option>
            <option value="3">Ing. Sistemas Computacionales</option>
            <option value="4">Ing. Química</option>
            <option value="5">Ing. Electromecánica</option>
            <option value="6">Ing. Mecatrónica</option>
            <option value="7">Ing. Logística</option>
            <option value="8">Ing. TICs</option>
          </select>
        </div>
        <label class="control-label col-sm-1" for="correo">Egreso:</label>
        <div class="col-sm-2">
          <select multiple class="form-control input-sm" name="egreso" id="anio_egreso">
            <option value="0">Año de Egreso</option>
            <option value="1">1980</option>
            <option value="2">1981</option>
            <option value="3">1982</option>
            <option value="4">1983</option>
            <option value="5">1984</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="maestria">Maestría:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="maestria" placeholder="Ma. en XXXXX">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pais">Pais:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="pais">
      </div>
      <label class="control-label col-sm-1" for="estado">Estado:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="estado">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="municipio">Municipio:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="municipio">
      </div>
      <label class="control-label col-sm-1" for="colonia">Colonia:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="colonia">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="calle">Calle y No:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="calle">
      </div>
      <label class="control-label col-sm-1" for="cp">CP:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="cp" placeholder="500XX...">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="contraseña">Contraseña:</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" id="contraseña" placeholder="********">
      </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="repcontraseña">Repetir Contraseña:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="repcontraseña" placeholder="********">
    </div>
</div>
      <br>
      <br>
        <div class="col-sm-offset-5 col-sm-2" align="center">
          <button type="submit" class="btn btn-danger btn-lg btn-block" align="center">Registrar</button>
        </div>
  </form>

  </div>

      <div class="col-sm-12" align="center">
        <hr style="height: 2px; width:50%; background-color: #c72020;">
      </div>


@stop

@section('footer')

@stop
