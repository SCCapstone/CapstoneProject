<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlord', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("housingType")->nullable();
            $table->string("rentalCompany")->nullable();
            $table->string("officeHours")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("officeAddress")->nullable();
            $table->string("rentDueBy")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landlord');
    }
}
