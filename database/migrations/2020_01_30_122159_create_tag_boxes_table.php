<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_boxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('chanpion_id');
            // $table->foreign('chanpion_id')->references('id')->on('chanpions');
            $table->string('chanpion_tag1');
            $table->string('chanpion_tag2');
            $table->string('chanpion_tag3');
            $table->string('chanpion_tag4');
            $table->string('chanpion_tag5');
            $table->string('chanpion_tag6');
            $table->string('chanpion_tag7');
            $table->string('chanpion_tag8');
            $table->string('chanpion_tag9');
            $table->string('chanpion_tag10');

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
        // $table->dropForeign(['chanpion_id']);
        Schema::dropIfExists('tag_boxes');
    }
}
