<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomicilioEgresado extends Model
{
        protected $table = 'domicilio_egresados';
        protected $primaryKey = "Id_DomEgresado";

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
