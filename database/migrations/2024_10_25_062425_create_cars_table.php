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
        Schema::create('cars', function (Blueprint $table) {
          $table->id();
          $table->timestamps();
          $table->string('brand', 100);
          $table->float('year', 10, 2);
          $table->float('axles', 10, 2);
          $table->float('own_weight', 10, 2);
          $table->float('full_weight', 10, 2);
          $table->float('load_capacity', 10, 2);
          $table->float('length', 10, 2);
          $table->float('width', 10, 2);
          $table->float('height', 10, 2);
          $table->string('preview_img');
          $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
