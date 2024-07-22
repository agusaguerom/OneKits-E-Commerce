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
        Schema::create('pelotas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_tipo_marca');
            $table->String('nombre');
            $table->integer('precio');
            $table->unsignedBigInteger('fk_fotos');
            $table->text('Descripcion');
            $table->timestamps();

            $table->foreign('fk_tipo_marca')->references('id')->on('tipo_marcas')->onDelete('cascade');
            $table->foreign('fk_fotos')->references('id')->on('imagenes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelotas');
    }
};
