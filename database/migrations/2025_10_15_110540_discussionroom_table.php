<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('disscusionroom', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sessions_id')->constrained('session')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->text('user_chat');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disscusionroom');
    }
};
