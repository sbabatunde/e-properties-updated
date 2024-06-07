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
        Schema::create('property_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_id')->unsigned();
            $table->string('sequence');
            $table->decimal('initial_pay', 15, 2);
            $table->decimal('subsequent_pay', 15, 2);
            $table->text('initial_denomiation');
            $table->text('initial_append');
            $table->text('subsequent_denomination');
            $table->text('subsequent_append');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_payments');
    }
};
