<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChanpionTagBoxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanpionTagBox', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chanpion_id');
            $table->unsignedBigInteger('chanpion_tag_id_1');
            $table->unsignedBigInteger('chanpion_tag_id_2');
            $table->unsignedBigInteger('chanpion_tag_id_3');
            $table->unsignedBigInteger('chanpion_tag_id_4');
            $table->unsignedBigInteger('chanpion_tag_id_5');
            $table->unsignedBigInteger('chanpion_tag_id_6');
            $table->unsignedBigInteger('chanpion_tag_id_7');
            $table->unsignedBigInteger('chanpion_tag_id_8');
            $table->unsignedBigInteger('chanpion_tag_id_9');
            $table->unsignedBigInteger('chanpion_tag_id_10');
            // $table->foreign('chanpion_id')->references('id');
            // $table->foreign('chanpion_tag_id_1')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_2')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_3')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_4')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_5')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_6')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_7')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_8')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_9')->references('id')->on('chanpionTags');
            // $table->foreign('chanpion_tag_id_10')->references('id')->on('chanpionTags');
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
        Schema::dropIfExists('chanpionTagBox');
    }
}
