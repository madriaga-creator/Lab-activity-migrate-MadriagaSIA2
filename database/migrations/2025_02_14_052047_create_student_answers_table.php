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
        Schema::create('student_answers', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign key
            $table->foreignId('exam_id')->constrained('exams')->onDelete('cascade'); // Foreign key
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade'); // Foreign key
            $table->string('exam_ref_code');
            $table->string('selected_answer');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_answers');
    }
};
