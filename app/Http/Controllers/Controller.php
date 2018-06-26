<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function success($data)
    {
        return [
            'code' => 0,
            'msg' => '',
            'info' => $data
        ];
    }

    public function error($error)
    {
        return [
            'code' => 1,
            'msg' => $error,
            'info' => null
        ];
    }
}
