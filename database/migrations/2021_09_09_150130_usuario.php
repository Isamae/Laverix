<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Shema Usuario
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique()->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable() ;
            $table->string('password')->nullable();
            $table->string('telefono',10);
            $table->date('fechaNacimiento')->nullable();
            $table->string('direccion');
            $table->enum('rol', ['Administrador', 'Usuario','Invitado']);
            $table->rememberToken();
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
        //
    }
}
