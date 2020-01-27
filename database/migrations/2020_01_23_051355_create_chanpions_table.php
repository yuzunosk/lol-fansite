<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChanpionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanpions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sub_name');
            $table->string('popular_name' , 60);
            $table->string('feature');
            $table->unsignedBigInteger('main_roll_id');
            // $table->foreign('main_roll_id')->references('id')->on('chanpionRolls');
            $table->unsignedBigInteger('sub_roll_id');
            // $table->foreign('sub_roll_id')->references('id')->on('chanpionRolls');
            $table->unsignedBigInteger('be_cost');
            $table->unsignedBigInteger('rp_cost');
            $table->string('chanpion_img');
            $table->unsignedBigInteger('st_attack');
            $table->unsignedBigInteger('st_magic');
            $table->unsignedBigInteger('st_toughness');
            $table->unsignedBigInteger('st_mobility');
            $table->unsignedBigInteger('st_difficulty');
            $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('chanpion_tag_id');
            // $table->foreign('chanpion_tag_id')->references('id')->on('chanpionTags');
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
        Schema::dropIfExists('chanpions');
    }
}
