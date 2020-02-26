<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'chanpionTags';

    protected $fillable = [
        'name','sub_name'
    ];

    /**
     * chanpionTagsに紐づいたchanpionsのリスト
     */
    public function chanpions()
    {
        return $this->belongsMany(Chanpion::class);
    }
}
