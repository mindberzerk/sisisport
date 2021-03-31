<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Nowplaying extends Model
{
    use HasFactory;
    use Sortable;


    public $sortable = [
        'Game_id',
        'team_a',
        'team_b',
        'odds',
        'league',
        'tournament',
        'country',
        'date', 'time'
    ];
    protected $fillable = [
        'Game_id',
        'team_a',
        'team_b',
        'odds',
        'league',
        'tournament',
        'country',
        'date', 'time'
    ];

//Tell laravel to fetch text values and set them as arrays
    protected $casts = [
        'odds' => 'array'
    ];
}
