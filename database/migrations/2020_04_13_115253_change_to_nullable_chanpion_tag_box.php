<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeToNullableChanpionTagBox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chanpionTagBox', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->unsignedBigInteger('chanpion_id')->nullable()->change();
            $table->string('chanpion_tag_id_1')->nullable()->change();
            $table->string('chanpion_tag_id_2')->nullable()->change();
            $table->string('chanpion_tag_id_3')->nullable()->change();
            $table->string('chanpion_tag_id_4')->nullable()->change();
            $table->string('chanpion_tag_id_5')->nullable()->change();
            $table->string('chanpion_tag_id_6')->nullable()->change();
            $table->string('chanpion_tag_id_7')->nullable()->change();
            $table->string('chanpion_tag_id_8')->nullable()->change();
            $table->string('chanpion_tag_id_9')->nullable()->change();
            $table->string('chanpion_tag_id_10')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chanpionTagBox', function (Blueprint $table) {
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
        });
    }
}
