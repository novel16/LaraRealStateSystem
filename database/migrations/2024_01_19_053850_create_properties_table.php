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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('property_name');
            $table->double('property_price');
            $table->double('deposit_amount');
            $table->mediumText('property_address');
            $table->string('offer_type');
            $table->string('property_type');
            $table->string('property_status');
            $table->string('furnished_status');
            $table->string('bhk');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('balconies');
            $table->integer('carpet_area');
            $table->integer('property_age');
            $table->integer('total_floor');
            $table->integer('room_floor');
            $table->string('loan');
            $table->longText('description');


            $table->tinyInteger('c_lift')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_guard')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_playground')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_garden')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_watersupply')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_power')->default('0')->comment('0 = uncheck, 1= check');

            $table->tinyInteger('c_parking')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_gym')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_shopping')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_hospital')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_school')->default('0')->comment('0 = uncheck, 1= check');
            $table->tinyInteger('c_market')->default('0')->comment('0 = uncheck, 1= check');


            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
