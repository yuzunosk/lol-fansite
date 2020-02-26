<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChanpionChanpionTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanpion_chanpionTag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chanpion_id');
            $table->foreign('chanpion_id')->references('id')->on('chanpions');
            $table->unsignedBigInteger('chanpionTag_id');
            $table->foreign('chanpionTag_id')->references('id')->on('chanpionTags');
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
        Schema::table('chanpion_chanpionTag', function (Blueprint $table) {
            // 外部キー付きのカラムを削除するにはまず必ず外部キー制約を外す必要があります
            $table->dropForeign(['chanpion_id']);
            $table->dropForeign(['chanpionTag_id']);
            $table->dropColumn('chanpion_id');
            $table->dropColumn('chanpionTag_id');
        });
        Schema::dropIfExists('chanpion_chanpionTag');
    }
}
