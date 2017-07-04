<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class ProductController extends Controller
{
    public function index()
    {
        //
        $products=Product::all();
        return view('products.index',compact('products'));
    }

    public function create(Request $request)
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $file = Input::file('image');

        $imageName = $request ->file('image') ->getClientOriginalName();

        $file -> move(public_path() .'/images', $imageName);

        $product= new Product($request->all());
        $product->image = $imageName;
        $product->save();
        return redirect('products');
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
//        $file = Input::file('image');
//
//        $imageName = $request ->file('image') ->getClientOriginalName();
//
//        $file -> move(public_path() .'/images', $imageName);
//        $product= new Product($request->all());
        $product=Product::find($id);
//        $product->image = $imageName;
        $product->update($request->all());
        return redirect('products');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('products');
    }
}
