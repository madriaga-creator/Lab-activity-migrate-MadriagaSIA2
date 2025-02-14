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
        Schema::create('exams', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('exam_ref_code')->unique();
        $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade'); // Foreign key
        $table->time('exam_time');
        $table->json('questions_ids'); // Store selected question IDs
        $table->timestamps();
    });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
