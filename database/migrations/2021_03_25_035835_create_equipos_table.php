<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
          $table->id();
            $table->string('eq_serial')->unique();
            $table->foreignId('eq_tequid');
            $table->string('eq_nbiennacional')->unique();
            $table->boolean('eq_estatus')->nullable();
            $table->foreignId('modelos_mdl_id');
            $table->foreignId('marcas_mar_id');
            $table->foreignId('departamentos_dep_id');
            //$table->integer('ubicacion_equipo_ubeq');
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
        Schema::dropIfExists('equipos');
    }
}
