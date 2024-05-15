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
        Schema::create('coupon', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('code', 10);
            $table->integer('discount');
            $table->unsignedBigInteger('coupon_status_id');
            $table->timestamps();

            $table->foreign('coupon_status_id')->references('id')->on('coupon_status')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon');
    }
};
