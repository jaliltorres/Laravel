@extends('layout.layoutbase')

@section('head')
<title>Registro de Empresa</title>
@endsection

@section('content')

<br>
  <div class="col-sm-12" align="center">
    <h3 align="center"><strong>REGISTRO DE EMPRESA</strong></h3>
    <h5>Con tu registro podrás ingresar al sistema, publicar vacantes y buscar el talento que tu organización necesita.</h5>
    <hr style="height: 2px; width:50%; background-color: #c72020;">
  </div>
<br>

  <div class="col-sm-12" align="center">
    <form class="col-sm-12 form-horizontal" role="form">
        <div class="form-group">
          <label class="control-label col-sm-4" for="nombrec">Nombre Comercial:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="nombrec">
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="rsocial">Razón Social:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="rsocial">
        </div>
    </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="rfc">R.F.C:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="rfc">
        </div>
        <label class="control-label col-sm-1" for="pais">País:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="pais">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="estado">Estado:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="estado">
        </div>
        <label class="control-label col-sm-1" for="municipio">Municipio:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="municipio">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="colonia">Colonia:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="colonia">
        </div>
        <label class="control-label col-sm-1" for="calleno">Calle/No:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="calleno">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="cp">C.P:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="cp">
        </div>
        <label class="control-label col-sm-1" for="sector">Sector:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="sector">
        </div>
      </div>

      <br>
      <br>
      <div class="col-sm-12" align="center">
        <h5 align="center"><strong>DATOS DEL REPRESENTANTE</strong></h5>
        <hr style="height: 2px; width:51%; background-color: #c72020;">
      </div>

      <div class="col-sm-12" align="center">
        <form class="col-sm-12 form-horizontal" role="form">
            <div class="form-group">
              <label class="control-label col-sm-4" for="nombre">Nombre:</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="nombre">
              </div>
              <label class="control-label col-sm-1" for="puesto">Puesto:</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="puesto">
          </div>
        </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email:</label>
            <div class="col-sm-2">
              <input type="email" class="form-control" id="email">
            </div>
            <label class="control-label col-sm-1" for="tel">Teléfono:</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="tel">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="contraseña">Contraseña:</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="contraseña">
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="repcontraseña">Repetir Contraseña:</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" id="repcontraseña">
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


    </form>
  </div>

@endsection

@section('footer')

@endsection
