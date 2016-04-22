<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
          $table->string('Id_CorreoContacto',120)->unique();
          $table->string('Nombre_Contacto',100);
          $table->string('Puesto_Contacto',50);
          $table->integer('Tel_Contacto');
          $table->integer('Extension')->nullable();
          $table->primary('Id_CorreoContacto');
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
        Schema::drop('contactos');
    }
}
