<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use carbon\Carbon;
use App\Models\DB;
use App\Models\Item;
use App\Models\Category;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $items = item::all();
        $categories = Category::all();
        //dd($categories);
        return view('order.createOrder', compact('items', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getItem($id){

        dd($id);

        $data = Item::where('id','=',$id)->get();

        $cartedItem = new Cart;

        $cartedItem->item_name = $data->item_name;
        $cartedItem->price = $data->price;
        $cartedITem->item_id = $id;
        $cartedItem->total = '0';

        $cartedItem->save();

        return view('cart.cartlist', compact('data', 'cartedItem'));

    }
}
