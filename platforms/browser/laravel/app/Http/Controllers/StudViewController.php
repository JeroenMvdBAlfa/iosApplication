<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
header('Access-Control-Allow-Origin: *');

class StudViewController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');
//        return view('stud_view', ['users' => $users]);
        return json_encode($users);
    }
}
