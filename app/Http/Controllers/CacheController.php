<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache

class CacheController extends Controller
{
    public function cache(Request $request)
    {
        $result = Cache::add($key, $value);
        if ($result) {
            echo "add save success!!";
        } else {
            echo "add save failed...";
        }
    }
}
