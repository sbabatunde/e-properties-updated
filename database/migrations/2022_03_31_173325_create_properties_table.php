<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_code');
            $table->integer('agent_id');
            $table->string('title')->nullable();
            $table->string('thumbnail');
            $table->string('furnishing');
            $table->bigInteger('type_id');
            $table->integer('bathrooms');
            $table->integer('toilets');
            $table->enum('status', ['Rent', 'Sale','Let','Lease','Land'])->default('Rent');
            $table->enum('auction', ['Yes', 'No'])->default('No');
            $table->enum('deal', ['Yes', 'No'])->default('No');
            $table->string('description');
            $table->string('state');
            $table->string('localty');
            $table->string('area');
            $table->string('street');
            $table->enum('C_of_O', ['Yes', 'No'])->default('No');
            $table->enum('installment', ['Yes', 'No'])->default('No');
            $table->enum('survey_plan', ['Yes', 'No'])->default('No');
            $table->enum('deed_of_ass', ['Yes', 'No'])->default('No');
            $table->enum('grant_of_prob', ['Yes', 'No'])->default('No');
            $table->enum('deed_of_mort', ['Yes', 'No'])->default('No');
            $table->enum('deed_of_gift', ['Yes', 'No'])->default('No');
            $table->enum('property_doc', ['Yes', 'No'])->default('No');
            $table->enum('land_receipt', ['Yes', 'No'])->default('No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
