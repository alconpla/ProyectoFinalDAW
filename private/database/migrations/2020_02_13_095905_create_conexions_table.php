<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConexionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conexion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->bigIncrements('id');
            
            $table->bigInteger('idpuntoacceso')->unsigned()->index();
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('mac');
            
            // $table->softDeletes();
            // $table->timestamps();
            
            $table->foreign('idpuntoacceso')->references('id')->on('puntoacceso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conexion');
    }
}
