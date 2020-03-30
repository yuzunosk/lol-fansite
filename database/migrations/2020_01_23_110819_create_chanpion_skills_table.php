<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChanpionSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanpionSkills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('na_name');
            $table->string('skill_type');
            $table->unsignedBigInteger('chanpion_id');
            $table->string('text', 255);
            $table->string('skill_icon_1');
            $table->string('skill_icon_2');
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
        Schema::dropIfExists('chanpionSkills');
    }
}
