@extends('layouts.default')
@section('content')
<h1>Create A new product</h1>
<form method="POST" action="/products"> 
    @csrf        
    <div>
        <input type="text" name="title" placeholder="Product Title">
    </div>
    <div>
        <textarea name="description" placeholder="Product Description"></textarea>
    </div>
    <div>
        <input type="text" name="imgpath" placeholder="Image Path">
    </div>
    <div>
        <input type="number" name="stockAvailable" placeholder="Stock Available">
    </div>
    <div>
        <button type="submit">Create Product</button>
    </div>
</form>
@stop