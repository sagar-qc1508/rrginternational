<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class News extends Model
{
    use HasFactory;
    protected $primaryKey = 'news_id';
    public $timestamps = false;
}
