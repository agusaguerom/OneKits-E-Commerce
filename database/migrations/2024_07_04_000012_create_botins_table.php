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
        Schema::create('botines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_tipo_marca');
            $table->unsignedBigInteger('fk_equipo');
            $table->unsignedBigInteger('fk_talle_calzado');
            $table->String('nombre');
            $table->integer('precio');
            $table->unsignedBigInteger('fk_fotos');
            $table->text('Descripcion');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('botins');
    }
};
