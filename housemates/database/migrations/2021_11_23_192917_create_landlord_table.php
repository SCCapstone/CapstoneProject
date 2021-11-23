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
            $table->string("housingType");
            $table->string("rentalCompany");
            $table->string("officeHours");
            $table->string("phone");
            $table->string("email");
            $table->string("officeAddress");
            $table->dateTime("rentDueBy");
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
