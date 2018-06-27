<?php

namespace App\Models;

class Tag extends Model
{

    protected $fillable = [
        'name', 'number'
    ];
    //
    public static function getByIds($ids)
    {
        $ids = explode(',', $ids);
        return empty($ids) ? [] : self::find($ids);
    }

    public static function parseFromString($tags)
    {
        if (empty($tags) || !is_array($tags)) return '';

        $tagIds = [];
        foreach($tags as $tag) {
            $tag = trim($tag);
            $tagObj = self::where('name', $tag)->first();
            if (isset($tagObj->id)) {
                $tagObj->number += 1;
                $tagObj->save();
            } else {
                $tagObj = self::create([
                    'name' => $tag,
                    'number' => 1
                ]);
            }
            $tagIds[] = $tagObj->id;
        }
        return join(',', $tagIds);
    }
}
