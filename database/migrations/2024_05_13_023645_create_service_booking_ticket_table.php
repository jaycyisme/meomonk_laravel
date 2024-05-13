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
        Schema::create('service_booking_ticket', function (Blueprint $table) {
            $table->id();
            $table->double('total_money');
            $table->date('create_time');
            $table->unsignedBigInteger('user_id');
            $table->date('update_time');
            $table->unsignedBigInteger('bill_status_id');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bill_status_id')->references('id')->on('bill_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_booking_tikcet');
    }
};
