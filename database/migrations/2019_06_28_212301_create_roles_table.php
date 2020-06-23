<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_rol',30);
            $table->string('descripcion',100)->nullable(); 
            $table->boolean('condicion_rol')->default(1);
        });

        DB::table('roles')->insert(array('id'=>'1','nombre_rol'=>'DOCTOR','descripcion'=>'DOCTOR ENCARGADO DE LA CLÍNICA'));
        DB::table('roles')->insert(array('id'=>'2','nombre_rol'=>'SECRETARIA','descripcion'=>'SECRETARIA DE LA CLINICA'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
