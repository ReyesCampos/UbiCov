<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SimbologiasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simbologias', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidadRep');
            $table->string('color');
            $table->string('simbolo');
            $table->unsignedBigInteger('id_reporte');
            $table->string('fecha_inicio');
            $table->string('fecha_final');
            $table->foreign('id_reporte')->references('id')->on('reportes');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simbologias');
    }
}
