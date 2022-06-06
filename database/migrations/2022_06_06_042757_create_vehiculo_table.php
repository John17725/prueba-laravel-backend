<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id();
            $table->integer('peso')->nullable();
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('motor_id');
            $table->unsignedBigInteger('traccion_id');
            $table->unsignedBigInteger('year_vehicle_id');
            $table->unsignedBigInteger('serie_id');
            $table->unsignedBigInteger('caja_cambios_id');
            $table->unsignedBigInteger('plazas_id');
            $table->timestamps();
            $table->foreign('marca_id')->references('id')->on('marca');
            $table->foreign('modelo_id')->references('id')->on('modelo');
            $table->foreign('motor_id')->references('id')->on('motor');
            $table->foreign('traccion_id')->references('id')->on('traccion');
            $table->foreign('year_vehicle_id')->references('id')->on('year_vehicle');
            $table->foreign('serie_id')->references('id')->on('serie');
            $table->foreign('caja_cambios_id')->references('id')->on('caja_cambios');
            $table->foreign('plazas_id')->references('id')->on('plazas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
}
