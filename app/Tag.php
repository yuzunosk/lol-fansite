<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'chanpionTags';

    protected $fillable = [
        'name','sub_name'
    ];}
