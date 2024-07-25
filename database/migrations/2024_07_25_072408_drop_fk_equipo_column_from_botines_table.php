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
        Schema::table('botines', function (Blueprint $table) {
            $table->dropForeign(['fk_equipo']); // Elimina la clave foránea primero, si existe
            $table->dropColumn('fk_equipo');   // Luego elimina la columna

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('botines', function (Blueprint $table) {
            //
        });
    }
};
