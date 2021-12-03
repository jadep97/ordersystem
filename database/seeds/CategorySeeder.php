<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(array(
        array(
            'category_name' => "Burger",
        ),
        array(
        	'category_name' => "Beverages",
        ),
        array(
        	'category_name' => "Combo Meals",
        ),
        
        ));
    }
}
