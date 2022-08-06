<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('idTipopersona')->unsigned();
            $table->string('Cedula');
            $table->string('Primernombre');
            $table->string('Segundonombre');
            $table->string('Apellidos');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Ciudad');
            $table->timestamps();

            $table->foreign('idTipopersona')->references('id')->on('tipopersonas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
