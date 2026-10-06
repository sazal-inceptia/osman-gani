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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('date_string')->nullable(); // e.g. "November 14-16, 2026"
            $table->date('event_date')->nullable();
            $table->string('location')->default('Dhaka & Online Live Stream');
            $table->string('event_type')->default('Live Bootcamp'); // e.g. Keynote, Bootcamp, Mastermind
            $table->string('pricing')->nullable(); // e.g. "Early Bird: $199"
            $table->text('description')->nullable();
            $table->string('registration_link')->nullable();
            $table->boolean('is_upcoming')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
