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
        Schema::create('camiseta_talle_stock', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_camiseta');
            $table->unsignedBigInteger('fk_tipo_talle');
            $table->integer('stock');
            $table->timestamps();
    
            $table->foreign('fk_camiseta')->references('id')->on('camisetas')->onDelete('cascade');
            $table->foreign('fk_tipo_talle')->references('id')->on('tipo_talles')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
