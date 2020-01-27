<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChanpionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chanpions')->insert([
            'name'=> 'test_chanpion',
            'sub_name' => 'sub_name',
            'popular_name' => 'test',
            'feature' => 'test',
            'main_roll_id' => 1,
            'sub_roll_id' => 1,
            'be_cost' => 4800,
            'rp_cost' => 880,
            'chanpion_img' => '',
            'st_attack' => 1,
            'st_magic' => 1,
            'st_toughness' => 1,
            'st_mobility' => 1,
            'st_difficulty' => 1,
            'user_id' => 1,
            'chanpion_tag_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),


        ]);
    }
}
