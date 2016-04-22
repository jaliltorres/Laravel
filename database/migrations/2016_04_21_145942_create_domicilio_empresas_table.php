<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicilioEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_empresas', function (Blueprint $table) {
            $table->bigIncrements('Id_DomEmpresa')->unique();
            $table->string('Colonia', 30);
            $table->string('Calle',100);
            $table->string('Num_Ext', 5)->nullable();
            $table->string('Num_Int', 5)->nullable();
            $table->integer('Cp');
            $table->string('Municipio',50);
            $table->string('Estado',30);
            $table->string('Pais',30);
            $table->string('Referencias',100)->nullable();
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
        Schema::drop('domicilio_empresas');
    }
}
