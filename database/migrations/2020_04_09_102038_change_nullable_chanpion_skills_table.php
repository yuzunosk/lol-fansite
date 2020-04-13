<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNullableChanpionSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chanpionSkills', function (Blueprint $table) {
            $table->string('skill_icon_1')->nullable()->change();
            $table->string('skill_icon_2')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chanpionSkills', function (Blueprint $table) {

            $table->string('skill_icon_1');
            $table->string('skill_icon_2');
        });
    }
}
