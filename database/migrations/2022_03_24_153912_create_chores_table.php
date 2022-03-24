<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('done')->nullable();
            $table->string('item')->nullable();
            $table->string('urgency')->nullable();
            $table->string('assignee')->nullable();
            $table->integer('house_num')->nullable();
            $table->integer('local_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chores');
    }
}