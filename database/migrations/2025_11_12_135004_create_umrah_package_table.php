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
        Schema::create('umrah_packages', function (Blueprint $table) {
              $table->id();
            $table->string('title');
            $table->string('type'); // Economy, Standard, Classic
            $table->text('description');
            $table->decimal('price', 10, 0);
            $table->string('duration'); // e.g., 35/42 Days
            $table->string('flight');
            $table->string('hotel_makkah');
            $table->string('hotel_madinah');
            $table->string('food');
            $table->text('special_services');
            $table->string('icon_class'); // e.g., fas fa-star
            $table->string('pdf_path')->nullable(); // PDF file path (uploaded from admin)
            $table->boolean('is_active')->default(true); // Show/hide on frontend
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrah_package');
    }
};
