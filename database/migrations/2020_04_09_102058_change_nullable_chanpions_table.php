<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNullableChanpionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chanpions', function (Blueprint $table) {
            $table->string('feature')->nullable()->change();
            $table->string('sub_Roll')->nullable()->change();
            $table->string('chanpion_img')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chanpions', function (Blueprint $table) {
            $table->string('feature');
            $table->string('sub_Roll');
            $table->string('chanpion_img');
        });
    }
}
