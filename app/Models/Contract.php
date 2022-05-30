<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Contract extends Model
{
    use HasFactory;
    protected $primaryKey = 'contract_id';
    public $timestamps = false;

}
