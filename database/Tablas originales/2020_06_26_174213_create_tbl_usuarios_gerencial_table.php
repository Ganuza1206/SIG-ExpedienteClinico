<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsuariosGerencialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuarios_gerencial', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nombre_usuario' ,100);
            $table->string('contraseña', 20);
            $table->string('tipo', 25);
            $table->boolean('condicion');
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
        Schema::dropIfExists('tbl_usuarios_gerencial');
    }
}
