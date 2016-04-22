<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomicilioEmpresa extends Model
{
    protected $table = 'domicilio_empresas';
    protected $primaryKey = 'Id_DomEmpresa';

    protected $fillable = [
      'Colonia',
      'Calle',
      'Num_Ext',
      'Num_Int',
      'Municipio',
      'Cp',
      'Estado',
      'Pais',
      'Referecias'
    ];
}
