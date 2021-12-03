<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert(array(
        array(
            'item_name' => "Hotdog",
            'price' => "100",
            'tax' => "0.075",
            'category_id' => "1",
        ),
        array(
        	'item_name' => "Cheese Burger",
            'price' => "110",
            'tax' => "0.075",
            'category_id' => "1",
        ),
        array(
        	'item_name' => "Fries",
            'price' => "90",
            'tax' => "0.075",
            'category_id' => "1",
        ),

        array(
        	'item_name' => "Coke",
            'price' => "25",
            'tax' => "0.045",
            'category_id' => "2",
        ),
        array(
        	'item_name' => "Sprite",
            'price' => "25",
            'tax' => "0.045",
            'category_id' => "2",
        ),
        array(
        	'item_name' => "Tea",
            'price' => "40",
            'tax' => "0.045",
            'category_id' => "2",
        ),
        array(
        	'item_name' => "Chicken Combo Meal",
            'price' => "120",
            'tax' => "0.085",
            'category_id' => "3",
        ),
        array(
        	'item_name' => "Pork Combo Meal",
            'price' => "130",
            'tax' => "0.085",
            'category_id' => "3",
        ),
        array(
        	'item_name' => "Fish Combo Meal",
            'price' => "125",
            'tax' => "0.085",
            'category_id' => "3",
        ),
        
        ));
    }
}
