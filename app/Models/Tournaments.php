<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Tournaments extends Model
{
    use HasFactory;
    use Sortable;

    public $sortable = ['tournament_id', 'name', 'country', 'league'];
    protected $fillable = ['tournament_id', 'name', 'country', 'league'];

}
