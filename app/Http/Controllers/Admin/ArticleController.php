<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Request;

use App\Http\Requests\ArticleForm;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function store(ArticleForm $article)
    {
//        try {
            $data = [
                'title' => $article->input('title'),
                'cate_id' => $article->input('cate_id'),
                'content' => $article->input('content')
            ];

            if ($article = Article::create($data)) {
                return $this->success($article->id);
            }
//        } catch (\Exception $e) {
//            return $this->error($e->getMessage());
//        }
    }
}
