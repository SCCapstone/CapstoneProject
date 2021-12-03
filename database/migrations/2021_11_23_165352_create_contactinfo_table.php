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
            $table->string("firstName")->nullable();
            $table->string("lastName")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("gmail")->nullable();
            $table->string("address")->nullable();
            $table->string("emergencyName")->nullable();
            $table->string("emergencyPhone")->nullable();
            $table->string("emergencyRelation")->nullable();
            $table->string("instagram")->nullable();
            $table->string("snapchat")->nullable();
            $table->string("venmo")->nullable();
            $table->string("tiktok")->nullable();
            $table->string("roommate1")->nullable();
            $table->string("roommate2")->nullable();
            $table->string("roommate3")->nullable();
            $table->string("roommate4")->nullable();
            $table->string('inviteRoommate')->nullable();
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
