<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
  //  /**
  //   * Display a listing of the resource.
  //   *
   //  * @return \Illuminate\Http\Response
    // */
    public function index()
    {
        $products = Product::all();
        return view('product.index',[
            'products' => $products
        ]);
        //return $p;
    }

   // /**
  //   * Show the form for creating a new resource.
  //   *
    // * @return \Illuminate\Http\Response
   //  */
    public function create()
    {
        return view('product.create');
    }

   // /**
   //  * Store a newly created resource in storage.
   ////  *
   //  * @param  \Illuminate\Http\Request  $request
    // * @return \Illuminate\Http\Response
    // */
    public function store(Request $request)
    {
        $newProduct = Product::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
        ]);
        return redirect('product/'.$newProduct->id);
    }

 //   /**
  //   * Display the specified resource.
 ///    *
 //    * @param  \App\Models\Product  $product
 //    * @return \Illuminate\Http\Response
 ///    */
    public function show(Product $product)
    {
        return view('product.show',[
            'product' => $product
        ]);
    }

   // /**
   //  * Show the form for editing the specified resource.
   //  *
   //  * @param  \App\Models\Product  $product
   //  * @return \Illuminate\Http\Response
   ////  */
    public function edit(Product $product)
    {
        return view('product.edit',[
           'edit' =>$product
        ]);
    }

  //  /**
   //  * Update the specified resource in storage.
    // *
   //  * @param  \Illuminate\Http\Request  $request
   //  * @param  \App\Models\Product  $product
   ///  * @return \Illuminate\Http\Response
   //  */
    public function update(Request $request, Product $product)
    {
        $product->update([
           'name' => $request->name,
           'type' => $request->type,
           'price' => $request->price
        ]);
        return redirect('/product/'.$product->id);
    }

  //  /**
  //   * Remove the specified resource from storage.
  //   *
  //   * @param  \App\Models\Product  $product
  //   * @return \Illuminate\Http\Response
  //   */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('product');
    }
}
