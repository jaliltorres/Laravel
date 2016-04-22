<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = 'Id_CorreoEmpresa';

    protected $fillable = [
      'Id_CorreoEmpresa',
      'Nombre_Empresa',
      'Id_correocontacto',
      'Contrasena',
      'Tipo_Produccion',
      'Giro_Produccion',
      'Razon_Social',
      'Id_domempresa',
      'Tel_Empresa',
      'Pagina_Web',
      'Tamanio_Empresa',
      'RFC'
    ];
}
