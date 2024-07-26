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
            $table->dropForeign(['fk_talle_calzado']);

            $table->dropColumn('fk_talle_calzado');
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
