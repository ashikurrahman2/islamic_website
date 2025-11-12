<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('umrah_significances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description_one');
            $table->text('description_two')->nullable();
            $table->string('guide_title');
            $table->string('section_title');
            $table->text('section_description');
            $table->string('congratulation_message');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umrah_significances');
    }
};