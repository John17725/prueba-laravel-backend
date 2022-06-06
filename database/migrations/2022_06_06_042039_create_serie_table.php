<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carroceria_id')->unsigned()->default(1);
            $table->unsignedBigInteger('puertas')->nullable()->default(5);
            $table->string('version')->nullable()->default('Mini');
            $table->timestamps();
            $table->foreign('carroceria_id')->references('id')->on('carroceria')->ononDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serie');
    }
}
