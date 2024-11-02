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
        Schema::create('projects', function (Blueprint $table) {
          $table->id();
          $table->timestamps();
          $table->string('name');
          $table->text('route');
          $table->text('cargo');
          $table->text('transport');
          $table->text('features');
          $table->text('description');
          $table->string('preview_img');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
