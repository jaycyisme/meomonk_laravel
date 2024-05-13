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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('service_type_id');
            $table->double('price');
            $table->string('description', 255);
            $table->string('image', 100);
            $table->boolean('is_active')->default(true);
            $table->integer('quantity');
            $table->unsignedBigInteger('service_status_id');
            $table->timestamps();

            $table->foreign('service_type_id')->references('id')->on('service_type')->onDelete('cascade');
            $table->foreign('service_status_id')->references('id')->on('service_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
