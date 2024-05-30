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
        Schema::create('page', function (Blueprint $table) {
            $table->id();
            $table->string('description_ar')->nullable(false); // Required
            $table->string('description_en')->nullable(false); // Required
            for ($i = 1; $i <= 5; $i++) {
                $table->string("image_$i")->nullable(); // Up to 5 images
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page');
    }
};
