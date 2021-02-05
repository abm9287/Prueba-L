<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idioma');
            $table->string('pais');
            $table->string('estado');
            $table->timestamps();

            $table->bigInteger('configuracion_id')->unsigned();
            $table->foreign('configuracion_id')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracion');
    }
}
