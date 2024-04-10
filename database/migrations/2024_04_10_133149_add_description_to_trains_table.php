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
            $table->time('Orario di partenza');
            $table->date('Giorno di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice Treno', 10);
            $table->integer('Numero Carrozze');
            $table->boolean('In orario')->nullable();
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
