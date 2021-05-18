<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceso_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('acl_ip');
            $table->string('acl_descripcion');
            $table->string('acl_estatus');
            $table->string('acl_pantalla');
             $table->integer('acl_us_id')->references('id')->on('users');
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
        Schema::dropIfExists('acceso_clientes');
    }
}
