<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
     $table->foreignId('umrah_significance_id')->constrained()->cascadeOnDelete();
    $table->integer('step_number');
    $table->string('step_label');
    $table->string('detail_title');
    $table->text('detail_description');
    $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umrah_steps');
    }
};