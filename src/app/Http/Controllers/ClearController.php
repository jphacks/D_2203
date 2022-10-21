<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClearController extends Controller
{
    //
    public function clear(Request $request){
        dd($request->sql_1_clear);
    }
}
