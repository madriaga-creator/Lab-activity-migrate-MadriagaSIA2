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
        Schema::create('questions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->text('question_text'); // Question text
            $table->string('correct_answer'); // Correct answer
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade'); // Foreign key
            $table->string('option_1'); 
            $table->string('option_2'); 
            $table->string('option_3'); 
            $table->string('option_4'); 
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
