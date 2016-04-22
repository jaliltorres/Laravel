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
    {!! Form::open( ['class' => 'col-sm-12 form-horizontal', 'role' => 'form'] )  !!}
      <div class="form-group">
          {!! Form::label( 'nombre_em', 'Nombre Comercial:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-5">
          {!! Form::text( 'nombre_em', null, ['class' => 'form-control'] ) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label( 'correo', 'Correo Empresarial:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-5">
        {!! Form::email( 'correo', null, ['class' => 'form-control'] ) !!}
      </div>
  </div>
      <div class="form-group">
            {!! Form::label( 'tipo_produc', 'Producción         Tipo:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::text( 'tipo_produc', null, ['class' => 'form-control'] ) !!}
        </div>
            {!! Form::label( 'giro_produc', 'Giro:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::text( 'giro_produc', null, ['class' => 'form-control'] ) !!}
        </div>
      </div>
      <div class="form-group">
          {!! Form::label( 'raz_social', 'Razón Social:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-5">
          {!! Form::text( 'raz_social', null, ['class' => 'form-control'] ) !!}
        </div>
    </div>
    <div class="form-group">
          {!! Form::label( 'telefono', 'Teléfono:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'telefono', null, ['class' => 'form-control'] ) !!}
      </div>
          {!! Form::label( 'web', 'Pag. Web:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'web', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <div class="form-group">
          {!! Form::label( 'tamanio', 'Tamaño:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'tamanio', null, ['class' => 'form-control'] ) !!}
      </div>
          {!! Form::label( 'rfc', 'R.F.C:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'rfc', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <br>
    <br>
    <div class="col-sm-12" align="center">
      <h5 align="center"><strong>DATOS DE UBICACIÓN ( EMPRESA )</strong></h5>
      <hr style="height: 2px; width:51%; background-color: #c72020;">
    </div>
    <div class="form-group">
        {!! Form::label( 'colonia', 'Colonia:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
        {!! Form::text( 'colonia', null, ['class' => 'form-control'] ) !!}
      </div>
      {!! Form::label( 'calle', 'Calle:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
      {!! Form::text( 'calle', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <div class="form-group">
        {!! Form::label( 'numext', 'No. Ext:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
        {!! Form::text( 'numext', null, ['class' => 'form-control'] ) !!}
      </div>
      {!! Form::label( 'numint', 'No. Int:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
      {!! Form::text( 'numint', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <div class="form-group">
        {!! Form::label( 'municipio', 'Municipio:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
        {!! Form::text( 'municipio', null, ['class' => 'form-control'] ) !!}
      </div>
      {!! Form::label( 'cp', 'C.P:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
      {!! Form::text( 'cp', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <div class="form-group">
        {!! Form::label( 'estado', 'Estado:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
        {!! Form::text( 'estado', null, ['class' => 'form-control'] ) !!}
      </div>
      {!! Form::label( 'pais', 'País:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
      {!! Form::text( 'pais', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::label( 'referencias', 'Referencias:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-5">
        {!! Form::textarea( 'referencias', null, ['class' => 'form-control', 'rows' => '2' ] ) !!}
      </div>
    </div>
    <br>
    <br>
    <div class="col-sm-12" align="center">
      <h5 align="center"><strong>DATOS DEL REPRESENTANTE</strong></h5>
      <hr style="height: 2px; width:51%; background-color: #c72020;">
    </div>
    <div class="form-group">
          {!! Form::label( 'nombre_contac', 'Nombre:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'nombre_contac', null, ['class' => 'form-control'] ) !!}
      </div>
          {!! Form::label( 'puesto', 'Puesto:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'puesto', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <div class="form-group">
          {!! Form::label( 'telefono_contac', 'Teléfono:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'telefono_contac', null, ['class' => 'form-control'] ) !!}
      </div>
          {!! Form::label( 'extension', 'Extensión:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
      <div class="col-sm-2">
          {!! Form::text( 'extension', null, ['class' => 'form-control'] ) !!}
      </div>
    </div>
    <div class="form-group">
        {!! Form::label( 'correo_contac', 'Correo:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
      <div class="col-sm-5">
        {!! Form::email( 'correo_contac', null, ['class' => 'form-control'] ) !!}
      </div>
  </div>
  <div class="form-group">
      {!! Form::label( 'contrasena', 'Contraseña:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
    <div class="col-sm-5">
      {!! Form::password( 'contrasena', ['class' => 'form-control', 'maxlength' => '12'] ) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label( 'confcontrasena', 'Confirmar Contraseña:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
  <div class="col-sm-5">
    {!! Form::password( 'confcontrasena', ['class' => 'form-control', 'maxlength' => '12'] ) !!}
  </div>
</div>
<br>
<br>
  <div class="col-sm-offset-5 col-sm-2" align="center">
    {!! Form::button( 'Registrar', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg btn-block', 'align' => 'center'] ) !!}
  </div>
    {!! Form::close() !!}
  </div>

@endsection

@section('footer')

@endsection
