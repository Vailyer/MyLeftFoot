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
        $product = product::findOrFail($id);
        return view('pages.stock.edit', compact('product'));
    }

    public function update($id)
    {
       $product = product::findOrFail($id);

       $product->productName = request('title');
       $product->productDesc = request('description');
       $product->imgpath = request('imgpath');
       $product->stockAvailable = request('stockAvailable');
       $product->save();

       return redirect('/products');
    }

    public function destroy($id)
    {
        product::findOrFail($id)->delete();
        return redirect('/products');

    }
}
