<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chanpion extends Model
{
    protected $table = 'chanpions';

    protected $fillable = ['name', 'sub_name', 'popular_name', 'feature', 'main_roll_id', 'sub_roll_id', 'be_cost', 'rp_cost', 'chanpion_img', 'st_attack', 'st_magic', 'st_toughness', 'st_mobility', 'st_difficulty', 'user_id', 'chanpion_tag_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    public function tagBoxs()
    {
        return $this->hasMany(TagBox::class);
    }
}
