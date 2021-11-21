<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroceryListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grocery_list', function (Blueprint $table) {
            $table->id('user_id');
            $table->timestamps();
            #$table->integer('user_id');
            #$table->dateTime('created_at');
            #$table->dateTime('updated_at');
            $table->string('user');
            $table->string('food');
            $table->string('drinks');
            $table->string('supplies');
            $table->string('other');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grocery_list');
    }
}
