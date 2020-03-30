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
            $table->string('name');
            $table->unsignedBigInteger('chanpion_id');
            $table->string('chanpion_tag_id_1');
            $table->string('chanpion_tag_id_2');
            $table->string('chanpion_tag_id_3');
            $table->string('chanpion_tag_id_4');
            $table->string('chanpion_tag_id_5');
            $table->string('chanpion_tag_id_6');
            $table->string('chanpion_tag_id_7');
            $table->string('chanpion_tag_id_8');
            $table->string('chanpion_tag_id_9');
            $table->string('chanpion_tag_id_10');
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
