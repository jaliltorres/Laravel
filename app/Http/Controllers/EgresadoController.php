<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Egresado as Egresado;

class EgresadoController extends Controller
{
    /**
    *@return Response
    */
    public function create(){
        return view('/prueba');
    }

    /**
    *@return Response
    */
    public function store(Request $request){
      $egresado = new Egresado;
      $egresado->nombre = $request->nombre1;
      $egresado->paterno = $request->paterno1;
      $egresado->materno = $request->materno1;
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
      return view('mostrar', ['egresados' => $egresado -> toArray() ]);
      else
      return response('no encontrado, 404');
    }

}
