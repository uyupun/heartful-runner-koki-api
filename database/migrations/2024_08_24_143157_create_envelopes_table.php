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
        Schema::create('envelopes', function (Blueprint $table) {
            $table->id();
            $table->uuid('code')->unique();
            $table->string('title');
            $table->foreignId('sender_id')->constrained('users');
            $table->foreignId('holder_id')->constrained('users');
            $table->enum('state', ['IN_PROGRESS', 'RECEIVED'])->default('IN_PROGRESS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envelopes');
    }
};
