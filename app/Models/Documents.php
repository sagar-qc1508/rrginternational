<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Documents extends Model
{
    use HasFactory;
    protected $primaryKey = 'document_id';
    public $timestamps = false;

}
