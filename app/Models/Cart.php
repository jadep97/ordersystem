<?php

namespace App\Models;
use App\Models\DB;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    protected $fillable = [
        'item_name', 'price', 'total', 'item_id'
    ];
}
