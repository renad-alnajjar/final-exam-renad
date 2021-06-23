<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products=Product::all();
        return view('allProductss',compact('Products'));
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

         $Products =new Product();
         $Categoriess =new Categories();

        $Products->Name=$request->Name;
         $Products->Price=$request->Price;
        $Products->Quantity=$request->Quantity;
         $Products->save();
return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Products = Product::find($id);
        return view('edits',compact('Products'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Products =Product::find($id);
         $Products->Name=$request->Name;
        $Categoriess->Category=$request->Category;
        $Products->Price=$request->Price;
        $Products->Quantity=$request->Quantity;
        $Products->save();
        return redirect('/');
  }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $Products =Product::find($id);
        $Products->delete();
        return redirect('/');

    }
    public function contact()
    {
        return view('createProduct');
    }
}