<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class History extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('history', function (Blueprint $table) {
            $table->increments('id');
            // Which table are we tracking
            $table->string('reference_table');
            // Which record from the table are we referencing
            $table->integer('reference_id')->unsigned();
            // Who made the action
            $table->integer('user_id')->unsigned();
            // What did they do
            $table->string('body');
            $table->string('issue_date');
            $table->string('new_expiry');
            $table->string('period');
            $table->timestamps();
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
        Schema::dropIfExists('history');
    }
}
