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
            $table->string('category');
            $table->string('address');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->string('quantity');
            $table->string('installment');
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
