<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    protected $table = 'egresados';
    protected $primaryKey = 'Id_CorreoEgresado';

    protected $fillable  = [
      'Id_CorreoEgresado', 'Contrasena', 'Id_claveperfil', 'Id_domegresado', 'Nombre_Egresado',
      'Ape_Paterno', 'Ape_Materno', 'No_Control', 'Fecha_Nacimiento', 'Genero', 'Estado_Civil',
      'Tel_Celular', 'Tel_Fijo', 'Especialidad_Carrera', 'Ano_Egreso', 'Mes_Egreso',
      'Esta_Titulado'
    ];
}
