<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Customer extends Model
{
    use HasFactory;
    use Sortable;

    protected static $priorities = [1, 2, 3, 4];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'priority',
    ];

    public $sortable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'priority',
    ];

    static function getPriorities()
    {
        return self::$priorities;
    }
}
