<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos', function (Blueprint $table) {
            $table->id();
            $table->integer('acc_us_id')->references('id')->on('users');
            $table->integer('acc_rol_id')->references('id')->on('rols');
             $table->integer('acc_mod_id')->references('id')->on('modulos');
             $table->integer('acc_pan_id')->references('id')->on('pantallas');
            $table->integer('acc_ac_id')->references('id')->on('acciones');
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
        Schema::dropIfExists('accesos');
    }
}
