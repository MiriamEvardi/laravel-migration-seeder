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
        Schema::table('trains', function (Blueprint $table) {
            $table->text('Azienda', 100);
            $table->time('Orario_di_partenza');
            $table->date('Giorno_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->string('Codice_Treno', 10);
            $table->tinyInteger('Numero_Carrozze');
            $table->boolean('In_orario')->nullable();
            $table->boolean('Cancellato')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
};
