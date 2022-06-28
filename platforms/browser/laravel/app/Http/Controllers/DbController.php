<?php

namespace App\http\Controllers;

use App\Http\Controllers\Controller;

header('Access-Control-Allow-Origin: *');

class DbController extends Controller
{

    public function read()
    {
        return view('/read');
    }
}
