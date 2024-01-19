<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['teamID', 'name', 'logo'];

    protected $table ='bcsj_team';
    protected $primaryKey  ='teamID';

}
