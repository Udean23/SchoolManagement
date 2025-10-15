<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('task_subbmision_material', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_submissions_id')->constrained('task_submissions')->cascadeOnDelete();
            $table->string('file')->nullable();
            $table->string('link')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('task_subbmision_material');
    }
};
