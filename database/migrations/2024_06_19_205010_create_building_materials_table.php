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
        Schema::create('building_materials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('thumbnail');
            $table->string('title');
            $table->string('state');
            $table->enum('status',['Active','Inactive','Sold'])->default('Active');
            $table->string('type');
            $table->string('address');
            $table->string('quantity');
            $table->string('unit');
            $table->string('denomination');
            $table->decimal('price', 10, 2);
            $table->string('installment')->default('No');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_materials');
    }
};
