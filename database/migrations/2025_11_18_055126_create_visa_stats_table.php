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
        Schema::create('visa_stats', function (Blueprint $table) {
            $table->id();
            $table->string('header_description')->nullable();
            $table->integer('applicants')->nullable();
            $table->integer('serving_countries')->nullable();
            $table->string('satisfied_clients')->nullable();
            $table->integer('experience_year')->nullable();
               $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_stats');
    }
};
