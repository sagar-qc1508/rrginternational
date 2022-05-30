<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Country extends Model
{
    use HasFactory;
    use Sortable;
    protected $primaryKey = 'country_id';
    public $timestamps = false;

    public $sortable = [
        'country_name',
        'country_code',
        'currency_name',
        'currency_symbol'
    ];
}
