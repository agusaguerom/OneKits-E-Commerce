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
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id();
            $table->String('url_imagen');
            $table->unsignedBigInteger('fk_botines');
            $table->unsignedBigInteger('fk_camisetas');
            $table->unsignedBigInteger('fk_pelotas');
            $table->timestamps();

            $table->foreign('fk_botines')->references('id')->on('botines')->onDelete('cascade');
            $table->foreign('fk_camisetas')->references('id')->on('camisetas')->onDelete('cascade');
            $table->foreign('fk_pelotas')->references('id')->on('pelotas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagens');
    }
};
