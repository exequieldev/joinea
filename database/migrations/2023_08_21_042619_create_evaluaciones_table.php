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
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->bigIncrements('idEvaluacion')->nullable();
            $table->string('estado');
            $table->string('observacion');
            $table->unsignedBigInteger('idMaterialDisertacion');
            $table->foreign('idMaterialDisertacion')->references('idMaterialDisertacion')->on('materialDisertaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluaciones');
    }
};
