<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string("phone")->nullable();
            $table->string("gmail")->nullable();
            $table->string("address")->nullable();
            $table->string("emergencyName")->nullable();
            $table->string("emergencyPhone")->nullable();
            $table->string("emergencyRelation")->nullable();
            $table->string("instagram")->nullable();
            $table->string("snapchat")->nullable();
            $table->string("venmo")->nullable();
            $table->string("tiktok")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
