<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDetallesIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detalles_ingresos', function (Blueprint $table) {
            $table->bigIncrements('detalle_ingreso_id');
            $table->float('precio_compra',10,2);
            $table->integer('cantidad');
            $table->date('fecha_compra');
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
        Schema::dropIfExists('tbl_detalles_ingresos');
    }
}
