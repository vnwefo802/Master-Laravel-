<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $love = Product::all();
        return view('Products.Index')->with(['james' => $love]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $product = Product::create(request()->all());
        session()->flash('success', "new product with id {$product->id} was created successfully");
        return redirect()->route('Product.index');
        // if (request()->stock==0 && request()->status=='available') {
        //     session()->PUT
        //    return redirect()->back();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($cat)
    {

       $dg = Product::findOrFail($cat);
       return view('Products.show')->with (['Trye'=> $dg,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $product)
    {
        $product=Product::findOrFail($product);
        return view('Products.edit')->with(['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($product)
    {
       $product = Product::findOrFail($product);
       $product->update(request()->all());
       return redirect()->route('Product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete (Product $Product)
    {
       $Product->delete();
       return redirect()->route('Product.index');
    }
}
