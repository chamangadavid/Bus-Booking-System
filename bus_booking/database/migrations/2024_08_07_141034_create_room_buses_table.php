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
        Schema::create('room_buses', function (Blueprint $table) {
            $table->id();
            $table->string('bus_title')->nullable();
            $table->string('start_From')->nullable();
            $table->time('bus_time')->nullable();
            $table->date('bus_date')->nullable();
            $table->string('destination')->nullable();
            $table->longText('description')->nullable();
            $table->integer('bus_capacity')->nullable();
            $table->string('price')->nullable();
            // $table->string('seat_type')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_buses');
    }
};
