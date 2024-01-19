<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class HomeController extends Controller
{
    public function Index(){

        $today = date("Y-m-d");
        // $matchsInt =  DB::select('call spGame_GetAllForDate(?,?)', [$today ,0]);
        // $matchsExt =  DB::select('call spGame_GetAllForDate(?,?)', [$today, 1]);
        $matchsInt =  Game::where('date', '>=', $today)->where('isExterior', '=', 0)->get();
        $matchsExt =  Game::where('date', '>=', $today)->where('isExterior', '=', 1)->get();
        return view('index', [
            'matchsInt'  => $matchsInt,
            'matchsExt'  => $matchsExt
        ]);
    }
}
