<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
          $table->string('Id_CorreoEmpresa',120)->unique();
         $table->string('Nombre_Empresa',100);
         $table->string('Id_correocontacto',120);
         $table->string('Contrasena', 8);
         $table->string('Tipo_Produccion',25);
         $table->string('Giro_Produccion',30);
         $table->string('Razon_Social',100);
         $table->bigInteger('Id_domempresa')->unsigned();
         $table->integer('Tel_Empresa');
         $table->string('Pagina_Web',120);
         $table->string('Tamanio_Empresa',20);
         $table->string('RFC',13);
         $table->primary('Id_CorreoEmpresa');
         $table->foreign('Id_correocontacto')->references('Id_CorreoContacto')->on('contactos');
         $table->foreign('Id_domempresa')->references('Id_DomEmpresa')->on('domicilio_empresas');
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
        Schema::drop('empresas');
    }
}
