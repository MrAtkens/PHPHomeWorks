<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function handleForm(Request $request, Product $product){
        $data = $request->except(['_token']);
        $product = new Product($data);
        $product->fill($data);
        $product->save();

        return redirect()->route('product.show', [$product]);
    }

    public function index()
    {
        return view('products',[
            'title' => 'Products',
            'products' => Product::all()
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->handleForm($request, new Product());
    }


    public function show(product $product)
    {
        return view('show',['product'=>$product]);
    }


    public function edit(product $product)
    {
        return view('form', [
            'product' => $product,
            'action' => route('product.update', [$product]),
            'method' => 'PUT'
        ]);
    }


    public function update(Request $request, product $product)
    {
        return $this->handleForm($request, $product);
    }

    public function destroy(product $product)
    {
        $product->delete();
        return response()->redirectTo('/');
    }
}
