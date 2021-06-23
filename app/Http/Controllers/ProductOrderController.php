<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // we will need to get all Products  
        $Products=Product::all();
        $ProductsOrders=Order::all();
        return view('allProductss',compact('Products','ProductsOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               $ProductsOrders =new Order();
        $ProductsOrders->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        
        $ProductsOrders = Order::find($id);
        return view('editOrders',compact('ProductsOrders'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ProductsOrders =Order::find($id);
         $ProductsOrders->Name=$request->Name;
      
        $ProductsOrders->save();
        return redirect('/');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ProductsOrders =Order::find($id);
        $ProductsOrders->delete();
        return redirect('/');
    }
}
