<?php

namespace App\Http\Controllers;
use App\product;
use Storage;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::paginate(6);
  
        return view('pages.stock.index', compact('products'));
    }

    public function create()
    {
        return view('/pages/stock/create');
    }
    public function store(Request $request)
    {
        if($request->hasFile('img')) {
            $file = $request->file('img'); 
            $filename = 'item-image-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path("/img"), $filename);
        }
        request()->validate([
            'title' => ['required', 'min:10', 'max:255'],
            'description' => ['required', 'min:10'],
            'price' => ['required', 'min:1', 'max:500'],
            'LRselect' => ['required'],
            'size' => ['required'],
            'gender' => ['required'],
            'colour' => ['required', 'min:3'],
            'brand' => ['required', 'min: 3'],
            'style' => ['required']

        ]);
        $product = new product;
        $product->productName = request('title');
        $product->productDesc = request('description');
        $product->imgurl = $filename;
        $product->price = request('price');
        $product->foot = request('LRselect');
        $product->size = request('size');
        $product->gender = request('gender');
        $product->colour = request('colour');
        $product->brand = request('brand');
        $product->style = request('style');
        $product->userid = auth()->user()->id;
        $product->save();


        return redirect('/products');
    }

    public function edit(product $product)
    {
        return view('pages.stock.edit', compact('product'));
    }

    public function update(product $product)
    {
        request()->validate([
            'title' => ['required', 'min:10', 'max:255'],
            'description' => ['required', 'min:10'],
            'imgpath' => ['required', 'min:3'],
            'price' => ['required', 'min:1', 'max:500'],
            'LRselect' => ['required'],
            'size' => ['required'],
            'gender' => ['required'],
            'colour' => ['required', 'min:3'],
            'brand' => ['required', 'min: 3'],
            'style' => ['required']

        ]);
        $product->update([
            'productName' => request('title'),
            'productDesc' => request('description'),
            'imgpath' => request('imgpath'),
            'price' => request('price'),
            'foot' => request('LRselect'),
            'size' => request('size'),
            'gender' => request('gender'),
            'colour' => request('colour'),
            'brand' => request('brand'),
            'style' => request('style'),
            'userid' => auth()->user()->id
        ]);


       return redirect('/products');
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect('/products');

    }

    public function show(product $product)
    {   
        return view('pages.stock.show', compact('product'));
    }
}
