<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use IntlDateFormatter;

class Game extends Model
{

   
    use HasFactory;
    protected $fillable = ['gameID','categoryID', 'receivingTeamID', 'hostingTeamID','date','time','location', 'isExterior'];
    protected $table ='bcsj_game';
    protected $primaryKey  ='gameID';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categoryID');
    }

    public function receivingTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'receivingTeamID', 'teamID' );
    }

    public function hostingTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'hostingTeamID', 'teamID');
    }
    
}
