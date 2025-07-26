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
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('location')->nullable();
            $table->datetime('start_datetime');
            $table->datetime('end_datetime');
            $table->string('event_type'); // prayer, lecture, community, special
            $table->string('status')->default('upcoming'); // upcoming, ongoing, completed, cancelled
            $table->string('featured_image')->nullable();
            $table->integer('max_participants')->nullable();
            $table->integer('registered_participants')->default(0);
            $table->boolean('is_recurring')->default(false);
            $table->json('recurrence_pattern')->nullable(); // For recurring events
            $table->text('contact_info')->nullable();
            $table->json('meta_data')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            $table->index(['event_type', 'status']);
            $table->index(['start_datetime', 'status']);
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
