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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_money', 15, 2);
            $table->string('trading_code');
            $table->date('create_time')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('update_time')->nullable();
            $table->unsignedBigInteger('bill_status_id')->nullable();
            $table->unsignedBigInteger('payment_method_id');
            $table->boolean('is_active')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('bill_status_id')->references('id')->on('bill_status')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_method')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
