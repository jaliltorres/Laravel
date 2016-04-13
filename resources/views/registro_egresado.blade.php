@extends('layout.layoutbase')

@section('head')
<title>Registro - Egresado</title>
@stop

@section('content')

<br>
  <div class="col-sm-12" align="center">
    <h3 align="center"><strong>REGISTRO DE EGRESADO</strong></h3>
    <hr style="height: 2px; width:50%; background-color: #c72020;">
  </div>
<br>

  <div class="col-sm-12" align="center">
    {!! Form::open( ['class' => 'col-sm-12 form-horizontal', 'role' => 'form'] )  !!}
      <div class="form-group">
          {!! Form::label( 'correo', 'Correo:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-5">
          {!! Form::email( 'correo', null, ['class' => 'form-control'] ) !!}
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
    <hr style="height: 2px; width:50%; background-color: #c72020;">
        <div class="form-group">
          {!! Form::label( 'nombre', 'Nombre(s):', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
          <div class="col-sm-5">
            {!! Form::text( 'nombre', null, ['class' => 'form-control'] ) !!}
          </div>
      </div>
      <div class="form-group">
            {!! Form::label( 'apaterno', 'A. Paterno:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::text( 'apaterno', null, ['class' => 'form-control'] ) !!}
        </div>
            {!! Form::label( 'amaterno', 'A. Materno:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
    <div class="col-sm-2">
            {!! Form::text( 'amaterno', null, ['class' => 'form-control'] ) !!}
        </div>
      </div>
      <div class="form-group">
            {!! Form::label( 'nocontrol', 'No. Control:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::text( 'nocontrol', null, ['class' => 'form-control', 'maxlength' => '8'] ) !!}
        </div>
            {!! Form::label( 'nacimiento', 'Nacimiento:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
    <div class="col-sm-2">
            {!! Form::date( 'nocontrol', null, ['class' => 'form-control'] ) !!}
        </div>
      </div>
      <div class="form-group">
            {!! Form::label( 'genero', 'Género:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::select( 'type', array('1' => 'Masculino', '2' => 'Femenino'), null, ['class' => 'form-control input-sm', 'id' => 'genero', 'placeholder' => 'Selecciona Género'] ) !!}
        </div>
            {!! Form::label( 'ecivil', 'E. Civil:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
    <div class="col-sm-2">
            {!! Form::select( 'type', array('1' => 'Soltero', '2' => 'Casado', '3' => 'Divorciado'), null, ['class' => 'form-control input-sm', 'id' => 'ecivil', 'placeholder' => 'Selecciona Estado Civil'] ) !!}
        </div>
      </div>
      <div class="form-group">
            {!! Form::label( 'celular', 'No. Celular:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::text( 'celular', null, ['class' => 'form-control', 'maxlength' => '10'] ) !!}
        </div>
            {!! Form::label( 'fijo', 'No. Fijo:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
    <div class="col-sm-2">
            {!! Form::date( 'fijo', null, ['class' => 'form-control', 'maxlength' => '7'] ) !!}
        </div>
      </div>
      <div class="form-group">
            {!! Form::label( 'anioegreso', 'Egreso  Año:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::selectRange( 'number', 1980, 2016, null, ['class' => 'form-control input-sm', 'id' => 'anioegreso', 'placeholder' => 'Selecciona Año de Egreso']) !!}
        </div>
            {!! Form::label( 'mesegreso', 'Mes:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
    <div class="col-sm-2">
            {!! Form::select( 'month',  $meses, null, ['class' => 'form-control input-sm', 'id' => 'mesegreso', 'placeholder' => 'Selecciona Mes de Egreso'] ) !!}
        </div>
      </div>
      <div class="form-group">
          {!! Form::label( 'carrera', 'Carrera:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-5">
          {!! Form::select( 'type', array(
          '1' => 'Ing. Gestion Empresarial',
          '2' => 'Ing. Electronica',
          '3' => 'Ing. Sistemas Computacionales',
          '4' => 'Ing. Quimica',
          '5' => 'Ing. Electromecanica',
          '6' => 'Ing. Mecatronica',
          '7' => 'Ing. Logistica',
          '8' => 'Ing. TICs'), null, ['multiple class' => 'form-control input-sm', 'id' => 'carrera', 'placeholder' => 'Selecciona tu Carrera'] ) !!}
        </div>
      </div>
      <div class="form-group">
            {!! Form::label( 'titulado', 'Titulado:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
        <div class="col-sm-2">
            {!! Form::select( 'type', array('0' => 'No', '1'  => 'Si' ), null, ['class' => 'form-control input-sm', 'id' => 'titulado', 'placeholder' => 'Selecciona Status']) !!}
        </div>

      </div>
      <hr style="height: 2px; width:50%; background-color: #c72020;">
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
        <div class="col-sm-offset-5 col-sm-2" align="center">
          {!! Form::button( 'Registrar', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg btn-block', 'align' => 'center'] ) !!}
        </div>
    {!! Form::close() !!}

  </div>

      <div class="col-sm-12" align="center">
        <hr style="height: 2px; width:50%; background-color: #c72020;">
      </div>

@stop

@section('footer')

@stop
