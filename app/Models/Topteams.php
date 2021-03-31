<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Topteams extends Model
{
    use HasFactory;
    use Sortable;

    public $sortable = ['team_id', 'team', 'league', 'country', 'pts'];
    protected $fillable = ['team_id', 'team', 'league', 'country', 'pts'];

}
