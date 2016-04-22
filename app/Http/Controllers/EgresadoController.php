<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Egresado as Egresado;
use App\DomicilioEgresado as DomEgresado;

class EgresadoController extends Controller
{
    /**
    *@return Response
    */
    public function create(){
        return view('/registro_egresado');
    }

    /**
    *@return Response
    */
    public function store(Request $request){

      $domicilio = DomEgresado::create([
        'Colonia' => $request->colonia,
        'Calle' => $request->calle,
        'Num_Ext' => $request->numext,
        'Num_Int' => $request->numint,
        'Municipio' => $request->municipio,
        'Cp' => $request->cp,
        'Estado' => $request->estado,
        'Pais' => $request->pais,
        'Referencias' => $request->referencias
        ]);

      $domicilio->save();

      $iddom = DomEgresado::all();
      $dom = $iddom->last();

      $egresado = Egresado::create ([
        'Id_CorreoEgresado' => $request->correo,
        'Contrasena' => $request->confcontrasena,
        //Claves foraneas
        'Id_claveperfil' => $request->carrera,
        'Id_domegresado' => $dom->Id_DomEgresado,
        'Nombre_Egresado' => $request->nombre,
        'Ape_Paterno' => $request->apaterno,
        'Ape_Materno' => $request->amaterno,
        'No_Control' => $request->nocontrol,
        'Fecha_Nacimiento' => $request->nacimiento,
        'Genero' => $request ->genero,
        'Estado_Civil' => $request->ecivil,
        'Tel_Celular' => $request->celular,
        'Tel_Fijo' => $request->fijo,
        'Especialidad_Carrera' => $request->carrera,
        'Ano_Egreso' => $request->anioegreso,
        'Mes_Egreso' => $request->mesegreso,
        'Esta_Titulado' => $request->titulado
        ]);
        
      $egresado->save();
        return "Se ha guardado el registro";
    }

    public function mes(){
      $months = [
    '01' => 'Enero',
    '02' => 'Febrero',
    '03' => 'Marzo',
    '04' => 'Abril',
    '05' => 'Mayo',
    '06' => 'Junio',
    '07' => 'Julio',
    '08' => 'Agosto',
    '09' => 'Septiember',
    '10' => 'Octubre',
    '11' => 'Noviembre',
    '12' => 'Diciembre'
];

return view('registro_egresado', array('meses' => $months));
    }

    public function show(){
      $egresado=Egresado::all();
      if (!is_null($egresado))
      //return view('mostrar', ['egresados' => $egresado  ]);
      return ("REGISTRO EXITOSO");
      else
      return response('no encontrado, 404');
    }

}
