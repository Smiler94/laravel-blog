<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $cats = Category::all();

        return $this->success($cats);
    }
}
