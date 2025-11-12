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
        Schema::create('umrah_significances', function (Blueprint $table) {
              $table->id();
            $table->string('title');
            $table->text('description_one');
            $table->text('description_two');
            $table->string('guide_title')->default('The Umrah Guide');
            $table->string('section_title')->default('Step by Step Hajj Guide');
            $table->string('section_description');
            $table->string('congratulation_message')->default('Haji Mubarak');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Create Umrah_steps table
        Schema::create('umrah_steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umrah_significance_id')
                  ->constrained('umrah_significances')
                  ->cascadeOnDelete();
            $table->integer('step_number');
            $table->string('step_icon');
            $table->text('step_label');
            $table->string('detail_title');
            $table->text('detail_description');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index('umrah_significance_id');
            $table->index(['is_active', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrah_significances');
          Schema::dropIfExists('umrah_steps');
    }
};
