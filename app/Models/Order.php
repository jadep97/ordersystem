<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'total_price', 'item_id'
    ];


    public function hasItems(){

    	return $this->hasMany(Items::class);

    }
}
