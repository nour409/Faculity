<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faculty_name');
            $table->string('prisedent');
            $table->string('sub_prisedent');
            $table->string('discription');
            $table->string('manger1');
            $table->string('manger2');
            $table->string('subjects');
            $table->string('hashtag');
            $table->string('family1');
            $table->string('family2');
            $table->string('family3');
            




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
    }
};
