<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBitacorasEtlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bitacoras_etl', function (Blueprint $table) {
            $table->bigIncrements('id_bitacora_etl');
            $table->dateTime('fecha_hora_inicio');
            $table->dateTime('fecha_hora_fin');
            $table->string('observaciones');
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
        Schema::dropIfExists('tbl_bitacoras_etl');
    }
}
