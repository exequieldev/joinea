<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidadDisertaciones', function (Blueprint $table) {
            $table->bigIncrements('idDisponibilidadDisertacion')->nullable();
            $table->unsignedBigInteger('idDisertacion');
            $table->unsignedBigInteger('idDisponibilidad');
            $table->foreign('idDisertacion')->references('idDisertacion')->on('Disertaciones');
            $table->foreign('idDisponibilidad')->references('idDisponibilidad')->on('disponibilidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disponibilidad_disertaciones');
    }
};
