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
        // Create hajj_significances table
        Schema::create('hajj_significances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description_one');
            $table->text('description_two');
            $table->string('guide_title')->default('The Hajj Guide');
            $table->string('section_title')->default('Step by Step Hajj Guide');
            $table->text('section_description');
            $table->string('congratulation_message')->default('Haji Mubarak');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Create hajj_steps table
        Schema::create('hajj_steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hajj_significance_id')
                  ->constrained('hajj_significances')
                  ->cascadeOnDelete();
            $table->integer('step_number');
            $table->string('step_icon');
            $table->text('step_label');
            $table->string('detail_title');
            $table->text('detail_description');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index('hajj_significance_id');
            $table->index(['is_active', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajj_steps');
        Schema::dropIfExists('hajj_significances');
    }
};