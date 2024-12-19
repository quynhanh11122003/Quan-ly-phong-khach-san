<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * $table->unsignedInteger('ClassRoomID');
     * $table->foreign('ClassRoomID')->references('ClassRoomID')->on('ClassRooms')->onDelete('cascade');
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->integerIncrements('RoomID');
            $table->integer('RoomNumber');
            $table->enum('RoomType', ['0', '1', '2']);
            $table->enum('Availability', ['0', '1', '2']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
