<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    //
    public function index()
    {
        $cats = Tag::all();

        return $this->success($cats);
    }
}
