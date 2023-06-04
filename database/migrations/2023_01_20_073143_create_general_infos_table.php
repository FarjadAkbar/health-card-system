<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_infos', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('website');
            $table->string('timing');
            $table->string('whatsapp');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('logo');
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
        Schema::dropIfExists('general_infos');
    }
}
