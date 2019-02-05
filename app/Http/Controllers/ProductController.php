<?php

namespace App\Http\Controllers;
use App\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
  
        return view('pages.stock.index', compact('products'));
    }
    public function create()
    {
        return view('/pages/stock/create');
    }
    public function store()
    {
        $product = new product();

        $product->productName = request('title');
        $product->productDesc = request('description');
        $product->imgpath = request('imgpath');
        $product->stockAvailable = request('stockAvailable');
        

        $product->save();
        return redirect('/products');
    }

    public function edit($id)
    {
        $product = product::find($id);
        return view('pages.stock.edit', compact('product'));
    }

    public function update()
    {
        dd(request()->all());
    }

    public function destroy()
    {

    }
}
