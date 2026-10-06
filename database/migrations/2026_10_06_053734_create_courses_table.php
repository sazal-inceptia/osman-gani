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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();
            $table->string('badge')->nullable(); // e.g. "★ Most Popular", "Flagship"
            $table->string('price')->nullable(); // e.g. "$99 / ৳9,990"
            $table->string('original_price')->nullable();
            $table->string('duration')->nullable(); // e.g. "23 Days", "Self-Paced"
            $table->string('modules_count')->nullable(); // e.g. "12 Modules"
            $table->json('key_takeaways')->nullable();
            $table->string('enroll_link')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
