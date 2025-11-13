<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visa_requirements', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Required Documents');
            $table->json('documents');
            $table->text('note')->nullable();
            $table->string('image');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visa_requirements');
    }
};