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
        Schema::create('stock_calzados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_botin');
            $table->unsignedBigInteger('fk_talle_calzados');
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('fk_botin')->references('id')->on('botines');
            $table->foreign('fk_talle_calzados')->references('id')->on('talle_calzados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_calzados');
    }
};
