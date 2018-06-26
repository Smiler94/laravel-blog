<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    //
    public function show($id)
    {
        return $this->success(Article::find($id));
    }
}
