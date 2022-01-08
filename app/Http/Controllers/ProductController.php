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
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product = new Product;
        return view('product.create', compact('product'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd ($request);
        $request->validate([
            'nama_product' => 'required',
            'harga_product' => 'required',
            'stock' => 'required',
            'detail' => 'required',
            'pengrajin' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
       
        $product = new Product();
        $product->nama_product =$request->nama_product;
        $product->harga_product =$request->harga_product;
        $product->stock =$request->stock;
        $product->detail =$request->detail;
        $product->pengrajin =$request->pengrajin;
        $product->kategori = $request->kategori;
        $path = $request->file('image')->store('public/images');
        $product->image = $path;
        $product->save();
       
        return redirect()->route('product')->with('success','Product created successfully.');
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
        
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $product = product::find($id); 
        return view('product.edit', compact('product'));
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
        //
        $request->validate([
            'nama_product' => 'required',
            'harga_product' => 'required',
            'stock' => 'required',
            'detail' => 'required',
            'pengrajin' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $path = $request->file('image')->store('public/images');
        $product = new Product();
        $product->nama_product =$request->nama_product;
        $product->harga_product =$request->harga_product;
        $product->stock =$request->stock;
        $product->detail =$request->detail;
        $product->pengrajin =$request->pengrajin;
        $product->kategori =$request->kategori;
        $product->image = $path;
    
        $product->save();
        return redirect()->route('product.index')
                        ->with('success','Product update successfully.');
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')
        ->with('Selamat!', 'Data berhasil dihapus :)');

        
    }
}