<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('session', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('course')->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->timestamp('deadline')->nullable();
            $table->enum('type', ['materi', 'tugas']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('session');
    }
};
