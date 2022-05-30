<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Emergencycontact extends Model
{
    use HasFactory;
    protected $primaryKey = 'contact_id';
    public $timestamps = false;
}
