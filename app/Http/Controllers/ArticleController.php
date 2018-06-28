<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    //
    public function show($id)
    {
        $article = Article::find($id);
        $article->click += 1;
        $article->save();

        $article->category;
        $article->tags = Tag::getByIds($article->tags);
        return $this->success($article);
    }

    public function listing()
    {
        return $this->success(Article::getNew());
    }
}
