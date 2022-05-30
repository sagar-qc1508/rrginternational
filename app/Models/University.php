<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class University extends Model
{
    use HasFactory;
    protected $primaryKey = 'university_id';
    public $timestamps = false;
}
