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
        Schema::create('materialDisertaciones', function (Blueprint $table) {
            $table->bigIncrements('idMaterialDisertacion')->nullable();
            $table->unsignedBigInteger('idDisertacion');
            $table->unsignedBigInteger('idMaterial');
            $table->foreign('idDisertacion')->references('idDisertacion')->on('Disertaciones');
            $table->foreign('idMaterial')->references('idMaterial')->on('materiales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_disertaciones');
    }
};
