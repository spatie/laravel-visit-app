<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function __invoke()
    {
        return response()->json(config('app'));
    }
}
