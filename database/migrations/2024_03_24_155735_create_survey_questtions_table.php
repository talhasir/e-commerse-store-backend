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
        Schema::create('survey_questtions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Survey::class, 'survey_id');
            $table->string('type', 45);
            $table->string('questions', 2000);
            $table->text('description')->nullable();
            $table->longText('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_questtions');
    }
};
