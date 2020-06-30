<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_productos', function (Blueprint $table) {
            $table->bigIncrements('producto_id');
            $table->integer('marca_id');
            $table->integer('proveedor_id');
            $table->integer('detalle_ingreso_id');
            $table->string('nombre_pro', 100);
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
        Schema::dropIfExists('tbl_productos');
    }
}
