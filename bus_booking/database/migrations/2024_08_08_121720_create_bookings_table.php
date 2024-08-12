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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('bus_id')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('seat_type')->nullable();
            $table->string('frombooking')->nullable();
            $table->string('destination')->nullable();
            $table->date('bookDate')->nullable();
            $table->time('bookTime')->nullable();
            $table->string('adults')->nullable();
            $table->string('children')->nullable();
            $table->string('luggages')->nullable();
            $table->longText('luggages_details')->nullable();
            $table->string('seat_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
