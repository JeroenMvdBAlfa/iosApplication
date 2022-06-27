<?php


namespace App\http\Controllers;

use App\Http\Controllers\Controller;

header('Access-Control-Allow-Origin: *');

class ArrayController extends Controller
{
    public function JSON()
    {
        $array = ['One' => 'een',
            'Two' => 'Twee',
            'Three' => 'Drie',
            'Four' => 'Vier',
            'Five' => 'Vijf',
//            "corrupt" => "agenten",
//            "dier" => "hond",
        ];
        return json_encode($array);
    }
}
