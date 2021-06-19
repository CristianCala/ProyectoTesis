<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_equipos', function (Blueprint $table) {
            $table->id();
            $table->integer('pres_salida');
            $table->timestamp('pres_fecha_salida');
            $table->timestamp('pres_fecha_entrada');
            $table->integer('usuarios_us_id');
            $table->integer('equipos_eq_id');
            $table->boolean('pres_estatus')->nullable();;
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
        Schema::dropIfExists('prestamo_equipos');
    }
}
