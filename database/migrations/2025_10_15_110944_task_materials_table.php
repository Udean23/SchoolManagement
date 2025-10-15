<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('task_material', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('link')->nullable();
            $table->foreignId('task_id')->constrained('session')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('task_material');
    }
};
