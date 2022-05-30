<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Staff extends Model
{
    use HasFactory;
    protected $primaryKey = 'staff_id';
    public $timestamps = false;
}
