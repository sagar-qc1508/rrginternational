<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Payslip extends Model
{
    use HasFactory;
    protected $primaryKey = 'payslip_id';
    public $timestamps = false;
}
