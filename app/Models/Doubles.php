<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doubles extends Model
{
    use HasFactory;

    protected $fillable = [
        'BetId',

        'Team_a',
        'Team_b',

        'GameId',
        'Date',
        'Time',
        'Odds',
        'betType',
        'Amount',
        'Potential_Return',

        'userID',
        'matchID',
        'Status',
    ];
}
