<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChanpionTagBox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chanpionTagBox', function (Blueprint $table) {
            DB::statement(' DELETE FROM chanpionTagBox');
            $table->string('name');
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
            $table->dropColumn('name');
        });
    }
}
