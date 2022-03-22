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
    //Properties Table
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            //Add Owner's ID later
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('property_category');
            $table->string('description')->nullable();
            $table->string('landmarks')->nullable();
            $table->string('property_size');
            $table->string('image')->nullable();
            $table->string('video');
            $table->decimal('lease_price');
            $table->year('build_year');
            $table->string('street');
            $table->string('house_number');
            $table->string('sector');
            $table->string('mohala')->nullable();
            $table->string('city');
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
