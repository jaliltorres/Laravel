<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';
    protected $primaryKey = 'Id_CorreoContacto';

    protected $fillable = [
      'Id_CorreoContacto',
      'Nombre_Contacto',
      'Puesto_Contacto',
      'Tel_Contacto',
      'Extension'
    ];
}
