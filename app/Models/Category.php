<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    //
    protected $fillable = [
        'category_name'
    ];

    public function hasItems(){

    	return $this->hasMany(Item::class);

    }
}
