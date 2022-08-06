<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('Placa');
            $table->bigInteger('idColor')->unsigned();
            $table->bigInteger('idMarca')->unsigned();
            $table->bigInteger('idTipovehiculo')->unsigned();
            $table->bigInteger('idConductor')->unsigned();
            $table->bigInteger('idPropietario')->unsigned();
            $table->timestamps();

            $table->foreign('idColor')->references('idColor')->on('colores')->onDelete("cascade");
            $table->foreign('idMarca')->references('idMarca')->on('marcas')->onDelete("cascade");
            $table->foreign('idTipovehiculo')->references('idTipovehiculo')->on('tipovehiculos')->onDelete("cascade");
            $table->foreign('idConductor')->references('idPersona')->on('personas')->onDelete("cascade");
            $table->foreign('idPropietario')->references('idPersona')->on('personas')->onDelete("cascade");
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
