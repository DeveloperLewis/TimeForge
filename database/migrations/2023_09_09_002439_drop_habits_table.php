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
        Schema::dropIfExists('habits');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('habits', function (Blueprint $table) {
            $table->id('habit_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->integer('times_completed');
            $table->timestamps();
        });
    }
};
