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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('agent_id')->nullable();
            $table->unsignedBigInteger('property_id')->nullable();
            $table->string('msg_name')->nullable();
            $table->string('msg_email')->nullable();
            // $table->string('msg_mobile')->nullable();
            $table->string('msg_phone')->nullable();
            $table->string('message')->nullable();
            $table->enum('status', ['read', 'unread'])->default('unread');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
