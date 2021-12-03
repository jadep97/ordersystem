<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use DB;

class Item extends Model
{
    //
    protected $table = 'items';

    protected $fillable = [
        'item_name', 'price', 'tax', 'category_id'
    ];


    public function getBurgers(){

    	$data = Category::where('category_name','=','Burgers')->get();
    	dd($data);
    	return $data;

    }

    public function hasItems(){

    	return $this->hasOne(Categories::class);

    }
}
