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
        Schema::create('student_results', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign key
            $table->foreignId('exam_id')->constrained('exams')->onDelete('cascade'); // Foreign key
            $table->string('exam_ref_code');
            $table->integer('total_questions');
            $table->integer('correct_answers');
            $table->integer('incorrect_answers');
            $table->decimal('score_percentage', 5, 2);
            $table->string('status');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_results');
    }
};
