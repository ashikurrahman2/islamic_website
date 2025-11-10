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
               // Main hajj documents table
        Schema::create('hajj_documents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Required Documents');
            $table->decimal('government_fee', 10, 2)->default(30000);
            $table->string('currency')->default('BDT');
            $table->string('kaaba_image')->nullable();
            $table->string('bottom_notice_line1')->nullable();
            $table->string('bottom_notice_line2')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Document categories table
        Schema::create('document_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hajj_document_id')->constrained()->onDelete('cascade');
            $table->string('category_title');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Document items table
        Schema::create('document_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_category_id')->constrained()->onDelete('cascade');
            $table->string('item_text');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Document notes table
        Schema::create('document_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hajj_document_id')->constrained()->onDelete('cascade');
            $table->string('note_text');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
               Schema::dropIfExists('document_items');
               Schema::dropIfExists('document_categories');
               Schema::dropIfExists('document_notes');
               Schema::dropIfExists('hajj_documents');

    }
};
