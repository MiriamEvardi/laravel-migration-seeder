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
            $table->text('company', 100);
            $table->time('departure_time');
            $table->date('departure_date');
            $table->time('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('carriage_number');
            $table->boolean('in_time')->nullable();
            $table->boolean('deleted')->nullable();
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
