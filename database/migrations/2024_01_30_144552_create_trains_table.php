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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('start_station');
            $table->string('stop_station');
            $table->time('start_time');
            $table->time('stop_time');
            $table->date('start_date');
            $table->date('stop_date');
            $table->char('code',7);
            $table->tinyInteger('coach_count');
            $table->boolean('on_time');
            $table->boolean('cancelled');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
