<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function AddGet(){

        $result = $this->populateGameForm();

        return view('admin.game', $result);
    }

    public function AddPost(Request $request){

        $this->validate($request, [
            'categoryID' => 'required',
            'receivingTeamID' => 'required',
            'visitorTeamID' => 'required',
            'date'=>'required',
            'time' => 'required',
            'location' => 'required'
         ]);

        $game = new Game;

        $game->categoryID = $request->categoryID;
        $game->receivingTeamID = $request->receivingTeamID;
        $game->visitorTeamID = $request->visitorTeamID;
        $game->date = $request->date;
        $game->time = $request->time;
        $game->location = $request->location;
        
        $team = Team::firstWhere('name','Basket Club Saint-Julien');

        if($request->receivingTeamID != $team->teamID){
            $game->isExterior = 1;
        }

        $game->save();

        $result = $this->populateGameForm();

        return view('admin.game', $result);
    }

    private function  populateGameForm(){
        $categories = Category::all();
        $teams = Team::orderBy('name', 'asc')->get();
 
        return [
            'categories'  => $categories,//->orderBy('name', 'desc')->get(),
            'teams'  => $teams
        ];
    }
}
