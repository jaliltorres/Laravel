<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicilioEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_egresados', function (Blueprint $table) {
          $table->bigIncrements('Id_DomEgresado')->unique();
          $table->string('Colonia', 30);
          $table->string('Calle', 100);
          $table->string('Num_Ext', 5);
          $table->string('Num_Int', 5);
          $table->string('Municipio', 50);
          $table->integer('Cp');
          $table->string('Estado', 30);
          $table->string('Pais', 30);
          $table->string('Referencias', 100);
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
        Schema::drop('domicilio_egresados');
    }
}
