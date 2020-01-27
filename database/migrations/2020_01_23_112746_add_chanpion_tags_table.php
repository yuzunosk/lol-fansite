<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChanpionTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chanpionTags', function (Blueprint $table) {
            DB::statement(' DELETE FROM chanpionTags');
            $table->string('sub_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chanpionTags', function (Blueprint $table) {
            $table->dropColumn('sub_name');
        });
    }
}
