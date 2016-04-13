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

    {!! Form::open( ['class' => 'col-sm-12 form-horizontal', 'role' => 'form'] )  !!}
        <div class="form-group">
          {!! Form::label( 'nombre1', 'Nombre(s):', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
          <div class="col-sm-5">
            {!! Form::text( 'nombre1', null, ['class' => 'form-control'] ) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label( 'paterno1', 'Paterno:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
          <div class="col-sm-2">
            {!! Form::text( 'paterno1', null, ['class' => 'form-control'] ) !!}
          </div>
          {!! Form::label( 'materno1', 'Materno:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
          <div class="col-sm-2">
            {!! Form::text( 'materno1', null, ['class' => 'form-control'] ) !!}
          </div>
        </div>
        <br>
        <br>
          <div class="col-sm-offset-5 col-sm-2" align="center">
            {!! Form::button('Registrar', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg btn-block']) !!}
          </div>
  {!! Form::close() !!}

  </div>

      <div class="col-sm-12" align="center">
        <hr style="height: 2px; width:50%; background-color: #c72020;">
      </div>


@stop

@section('footer')

@stop
