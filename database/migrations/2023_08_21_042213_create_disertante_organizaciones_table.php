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
        Schema::create('disertanteOrganizaciones', function (Blueprint $table) {
            $table->bigIncrements('idDisertanteOrganizacion')->nullable();
            $table->unsignedBigInteger('idOrganizacion');
            $table->unsignedBigInteger('idDisertante');
            $table->foreign('idOrganizacion')->references('idOrganizacion')->on('organizaciones');
            $table->foreign('idDisertante')->references('idDisertante')->on('disertantes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disertante_organizaciones');
    }
};
