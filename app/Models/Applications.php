<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Applications extends Model
{
    use HasFactory;
    use Sortable;
    protected $primaryKey = 'application_id';
    public $timestamps = false;
}
