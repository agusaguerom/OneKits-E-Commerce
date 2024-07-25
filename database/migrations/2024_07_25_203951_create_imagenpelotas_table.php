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
        Schema::create('imagenpelotas', function (Blueprint $table) {
            $table->id();
            $table->string('url_img');
            $table->unsignedBigInteger('fk_pelota');
            $table->timestamps();

            $table->foreign('fk_pelota')->references('id')->on('pelotas');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenpelotas');
    }
};
