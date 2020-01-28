<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roll extends Model
{
    protected $table = 'chanpionRolls';

    protected $fillable = [
        'name'
    ];
}
