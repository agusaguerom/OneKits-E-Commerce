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
        Schema::table('pelotas', function (Blueprint $table) {
            $table->foreign('fk_tipo_marca')->references('id')->on('tipo_marcas')->onDelete('cascade');
            $table->foreign('fk_fotos')->references('id')->on('imagenes')->onDelete('cascade');
        });

        Schema::table('imagenes', function (Blueprint $table) {
            $table->foreign('fk_botines')->references('id')->on('botines')->onDelete('cascade');
            $table->foreign('fk_camisetas')->references('id')->on('camisetas')->onDelete('cascade');
            $table->foreign('fk_pelotas')->references('id')->on('pelotas')->onDelete('cascade');
        });
        Schema::table('botines', function (Blueprint $table) {
            $table->foreign('fk_tipo_marca')->references('id')->on('tipo_marcas')->onDelete('cascade');
            $table->foreign('fk_talle_calzado')->references('id')->on('talle_calzados')->onDelete('cascade');
            $table->foreign('fk_fotos')->references('id')->on('imagenes')->onDelete('cascade');
        });
        Schema::table('camisetas', function (Blueprint $table) {
            $table->foreign('fk_tipo_marca')->references('id')->on('tipo_marcas')->onDelete('cascade');
            $table->foreign('fk_equipo')->references('id')->on('equipos')->onDelete('cascade');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('fk_tipo_usuario')->references('id')->on('tipo_usuarios')->onDelete('cascade');
            $table->foreign('fk_domicilio')->references('id')->on('domicilios')->onDelete('cascade');
        });
    }
};