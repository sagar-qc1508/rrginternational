<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Applicationguidance extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;
}
