<?php

namespace App\Models;

class Article extends Model
{
    //
    protected $fillable = [
        'cate_id',
        'title',
        'content',
        'tags'
    ];

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'cate_id');
    }

}
