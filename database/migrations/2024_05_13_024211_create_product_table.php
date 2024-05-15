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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('animal_id');
            $table->double('price');
            $table->string('description', 255);
            $table->string('image', 100);
            $table->string('thumbnail1', 100)->nullable();
            $table->string('thumbnail2', 100)->nullable();
            $table->string('thumbnail3', 100)->nullable();
            $table->string('thumbnail4', 100)->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('quantity');
            $table->unsignedBigInteger('product_status_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('supplier_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('animal_id')->references('id')->on('animal')->onDelete('cascade');
            $table->foreign('product_status_id')->references('id')->on('product_status')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brand')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('supplier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
