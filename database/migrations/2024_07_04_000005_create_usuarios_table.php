<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_tipo_usuario');
            $table->unsignedBigInteger('fk_domicilio');
            $table->String('nombre');
            $table->String('contrasena');
            $table->String('correo');
            $table->timestamps();

            $table->foreign('fk_tipo_usuario')->references('id')->on('tipo_usuarios')->onDelete('cascade');
            $table->foreign('fk_domicilio')->references('id')->on('domicilios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
