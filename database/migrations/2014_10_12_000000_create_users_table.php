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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            $table->enum('user_type', ['agent', 'landlord', 'tenant', 'service_provider']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_image')->nullable();
            $table->string('photo')->nullable();
            $table->integer('country_code')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('whatApp')->nullable();
            $table->string('state')->nullable();
            $table->string('axis')->nullable();
            $table->string('about_org')->nullable();
            $table->string('org_service')->nullable();
            $table->string('org_state')->nullable();
            $table->string('org_desc')->nullable();
            $table->string('org_axis')->nullable();
            $table->string('business_cat')->nullable();
            $table->text('experience')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('instagram')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            // $table->enum('user_type',['agent','admin','tenant','user'])->default ('user');
            $table->enum('status', ['verified', 'unverified'])->default('unverified');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
