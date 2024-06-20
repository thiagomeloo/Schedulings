<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedulings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entity_id')->nullable()->constrained('entities');
            $table->foreignId('create_by')->nullable()->constrained('users');
            $table->string('title');
            $table->text('description')->nullable();
            $table->dateTime('schedule_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedulings');
    }
};
