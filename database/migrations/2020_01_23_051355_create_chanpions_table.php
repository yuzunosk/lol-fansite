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
            $table->bigIncrements('id', 20);
            $table->string('name');
            $table->string('sub_name');
            $table->string('popular_name', 60);
            $table->string('feature');
            $table->string('main_roll_id');
            $table->string('sub_roll_id');
            $table->unsignedBigInteger('be_cost');
            $table->unsignedBigInteger('rp_cost');
            $table->string('chanpion_img');
            $table->unsignedBigInteger('st_attack');
            $table->unsignedBigInteger('st_magic');
            $table->unsignedBigInteger('st_toughness');
            $table->unsignedBigInteger('st_mobility');
            $table->unsignedBigInteger('st_difficulty');
            $table->unsignedBigInteger('user_id');
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
