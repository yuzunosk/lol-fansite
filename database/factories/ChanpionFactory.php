<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chanpion;
use Faker\Generator as Faker;
use Carbon\Carbon;


$factory->define(Chanpion::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'sub_name' => $faker->name,
        'main_roll_id' => random_int(1,6),
        'sub_roll_id' => random_int(1,6),
        'be_cost' => 4800,
        'rp_cost' => 880,
        'chanpion_img' => '',
        'st_attack' => 1,
        'st_magic' => 1,
        'st_toughness' => 1,
        'st_mobility' => 1,
        'st_difficulty' => 1,
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        },
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
