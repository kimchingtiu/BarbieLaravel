<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::all();
        return view('product.product',['products'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $data=Product::findOrFail($id);
        return view('Product.edit',['Product'=>$data]);
        return redirect('/')-> with('success', 'A record has been edited successfully!');
     }
 
     public function updateProduct(Request $req){
         
           
        
             $data=Product::find($req->id);
             $data->prodName=$req->prodName;
             $data->prodQuantity=$req->prodQuantity;
             $data->prodPrice=$req->prodPrice;
             
 
             $data->save();
             return redirect('/')-> with('success', 'A record has been edited successfully!');
 
 
         
     
         }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redurect('/product')->with('prod_del','Product deleted successfully');
    }
}
