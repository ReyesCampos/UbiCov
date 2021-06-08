<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReportesMigration extends Migration
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
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_fecha');
            $table->unsignedBigInteger('id_ubicacion');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_fecha')->references('id')->on('fechas');
            $table->foreign('id_ubicacion')->references('id')->on('ubicaciones');
            $table->foreign('id_status')->references('id')->on('status');
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
        Schema::dropIfExists('reportes');
    }
}
