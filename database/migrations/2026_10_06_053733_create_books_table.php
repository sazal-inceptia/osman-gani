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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->string('languages')->default('English, Bengali');
            $table->string('buy_link')->nullable();
            $table->string('amazon_link')->nullable();
            $table->string('cover_image')->nullable();
            $table->decimal('rating', 3, 1)->default(4.9);
            $table->integer('reviews_count')->default(1200);
            $table->boolean('is_bestseller')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
