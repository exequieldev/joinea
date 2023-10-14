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
        Schema::create('disertaciones', function (Blueprint $table) {
            $table->bigIncrements('idDisertacion')->nullable();
            $table->string('titulo');
            $table->string('descripcion');
            $table->unsignedBigInteger('idDisertanteOrganizacion');
            $table->unsignedBigInteger('idClasificacion');
            $table->foreign('idDisertanteOrganizacion')->references('idDisertanteOrganizacion')->on('disertanteOrganizaciones');
            $table->foreign('idClasificacion')->references('idClasificacion')->on('clasificaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disertaciones');
    }
};
