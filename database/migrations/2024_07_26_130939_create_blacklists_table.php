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
        Schema::create('blacklists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reporter_id');
            $table->bigInteger('reported_id');
            $table->bigInteger('blacklisted_by');
            $table->string('business_name');
            $table->string('category');
            $table->string('org_description');
            $table->string('reason');
            $table->string('reported_on');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blacklists');
    }
};
