<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHouseNumber extends Migration
{
    /**
     * Run the migrations.
     *
     * adds house number for keeping users in their individual houses
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->integer('house_num')->nullable();
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
