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
            Schema::create('imagenbotins', function (Blueprint $table) {
                $table->id();
                $table->string('url_img');
                $table->unsignedBigInteger('fk_botin');
                $table->timestamps();

                $table->foreign('fk_botin')->references('id')->on('botines');

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenbotins');
    }
};
