<?php

namespace App\Http\Requests;

use App\Http\Requests\AdminForm;

class ArticleForm extends AdminForm
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'cate_id' => 'required',
            'content' => 'required'
        ];
    }
}
