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
        Schema::create('scheduling_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scheduling_id')->constrained('schedulings');
            $table->foreignId('scheduled_by')->constrained('users');
            $table->foreignId('cancelled_by')->nullable()->constrained('users');
            $table->foreignId('member_id')->constrained('users');
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->boolean('organizer')->default(false);
            $table->boolean('showed_up')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduling_members');
    }
};
