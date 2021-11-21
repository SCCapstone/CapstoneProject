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
            $table->id('user_id');
            $table->timestamps();
            #$table->integer('user_id');
            #$table->dateTime('created_at');
            #$table->dateTime('updated_at');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('gmail');
            $table->string('emergencyPhone');
            $table->string('instagram');
            $table->string('snapchat');
            $table->string('venmo');
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
