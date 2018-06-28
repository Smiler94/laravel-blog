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

    public static function getNew($limit = 4)
    {
        $model = self::select('*')->orderBy('id', 'DESC')->simplePaginate($limit);

        if ($model) {
            foreach($model as $article) {
                $article->category;
            }
        }
        return $model;
    }
}
