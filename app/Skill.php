<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    protected $table = 'chanpionSkills';

    protected $fillable = [
        'name','na_name','skill_type','chanpion_id','text','skill_icon_1',
        'skill_icon_2'
    ];

    public function chanpion(){
        return belongsTo('App\Chanpion');
    }
}
