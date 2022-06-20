<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//Integer Unsigned Incremeent
            $table->string('name');//varchar hasta 255, si quieres mas es text()
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();// tiemstamp verificar correo
            $table->string('password');        
            $table->rememberToken();// mantener sesion iniciada, para el usuario
            $table->timestamps(); // create_at y update_at
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
};
