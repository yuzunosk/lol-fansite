<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagBox extends Model
{
    protected $table = 'chanpionTagBox';

    protected $fillable = [
        'name','chanpion_id','chanpion_tag_id_1','chanpion_tag_id_2','chanpion_tag_id_3','chanpion_tag_id_4','chanpion_tag_id_5','chanpion_tag_id_6',
        'chanpion_tag_id_7','chanpion_tag_id_8','chanpion_tag_id_9','chanpion_tag_id_10'
    ];

    public function chanpion()
    {
        return $this->belongsTo(Chanpion::class);
    }
}
