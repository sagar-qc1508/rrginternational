<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Brochure extends Model
{
    use HasFactory;
    protected $primaryKey = 'brochure_id';
    public $timestamps = false;
}
