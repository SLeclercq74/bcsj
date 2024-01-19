<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharteController extends Controller
{
    public function Index(){
        return view('charte');
    }
}
