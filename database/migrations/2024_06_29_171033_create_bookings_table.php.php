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
            $table->integerIncrements('BookingID');
            $table->unsignedInteger('CustomerID');
            $table->foreign('CustomerID')->references('CustomerID')->on('customers')->onDelete('cascade');
            $table->unsignedInteger('RoomID');
            $table->foreign('RoomID')->references('RoomID')->on('rooms')->onDelete('cascade');
            $table->date('CheckinDate');
            $table->date('CheckoutDate');
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
