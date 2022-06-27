<?php

namespace App\http\Controllers;

use App\Http\Controllers\Controller;

header('Access-Control-Allow-Origin: *');

class AjaxController extends Controller
{

    public function show()
    {
        return view('/ajax');
}
}
