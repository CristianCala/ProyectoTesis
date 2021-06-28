<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //$table->integer('us_rol_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula')->unique();
            $table->string('email')->unique();
            $table->string('usuario')->unique();
            //$table->integer('us_tu_id');
            //$table->string('fotos');
            $table->boolean('estatus')->nullable();;
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
