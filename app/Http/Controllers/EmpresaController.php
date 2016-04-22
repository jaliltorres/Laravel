<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DomicilioEmpresa as DomEmpresa;
use App\Contacto as Contacto;
use App\Empresa as Empresa;

class EmpresaController extends Controller
{
  public function create(){
      return view('/registro_empresa');
  }

  /**
  *@return Response
  */
  public function store(Request $request){

      $domempresa = DomEmpresa::create([
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

        $domempresa->save();

        $contact = Contacto::create([
          'Id_CorreoContacto' => $request->correo_contac,
          'Nombre_Contacto' => $request->nombre,
          'Puesto_Contacto' => $request->puesto,
          'Tel_Contacto' => $request->telefono_contac,
          'Extension' => $request->extension
          ]);

          $contact->save();

          $idcorreo = Contacto::all();
          $contactoid = $idcorreo->last();

          $iddom = DomEmpresa::all();
          $id = $iddom->last();

          $emp = Empresa::create([
            'Id_CorreoEmpresa' => $request->correo,
            'Nombre_Empresa' => $request->nombre_em,
            'Id_correocontacto' => $contactoid->Id_CorreoContacto,
            'Contrasena' => $request->confcontrasena,
            'Tipo_Produccion' => $request->tipo_produc,
            'Giro_Produccion' => $request->giro_produc,
            'Razon_Social' => $request->raz_social,
            'Id_domempresa' => $id->Id_DomEmpresa,
            'Tel_Empresa' => $request->telefono,
            'Pagina_Web' => $request->web,
            'Tamanio_Empresa' => $request->tamanio,
            'RFC' => $request->rfc
            ]);
  }
}
