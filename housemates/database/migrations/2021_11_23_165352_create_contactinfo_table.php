<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactinfo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("firstName");
            $table->string("lastName");
            $table->string("phone");
            $table->string("email");
            $table->string("gmail");
            $table->string("address");
            $table->string("emergencyName");
            $table->string("emergencyPhone");
            $table->string("emergencyRelation");
            $table->string("instagram");
            $table->string("snapchat");
            $table->string("venmo");
            $table->string("tiktok");
            $table->string("roommate1");
            $table->string("roommate2");
            $table->string("roommate3");
            $table->string("roommate4");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactinfo');
    }
}
