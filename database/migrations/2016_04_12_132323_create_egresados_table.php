<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
          $table->string('Id_CorreoEgresado',120)->unique();
          $table->string('Contrasena',12);
          $table->string('Id_ClavePerfil',20);
          $table->bigInteger('Id_DomEgresado')->unsigned();
          $table->string('Nombre_Egresado', 50);
          $table->string('Ape_Paterno', 50);
          $table->string('Ape_Materno', 50);
          $table->string('No_Control', 10);
          $table->date('Fecha_Nacimiento');
          $table->string('Genero',10);
          $table->string('Estado_Civil', 10);
          $table->bigInteger('Tel_Celular');
          $table->bigInteger('Tel_Fijo');
          $table->string('Especialidad_Carrera',100);
          $table->integer('Ano_Egreso');
          $table->integer('Mes_Egreso');
          $table->char('Esta_Titulado',2);
          $table->primary('Id_CorreoEgresado');
          $table->foreign('Id_ClavePerfil')->references('Id_ClavePerfil')->on('perfiles');
          $table->foreign('Id_DomEgresado')->references('Id_DomEgresado')->on('domicilio_egresados');
          $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('egresados');
    }
}
