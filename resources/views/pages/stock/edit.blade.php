@extends('layouts.auth')
@section('content')
<div class ="col-md">
</div>
<div class="col-sm">
    <div class="row">
        <div class="container text-center">
            <img class="mb-4" src="../../img/shoe.png" alt="" width="72" height="72">
            <h3 class="text-center">Edit Project:</h3>
            <form method="POST" action="/products/{{ $product->id }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <input class="form-control {{ $errors->has('title') ? ' alert-danger' : '' }} " type="text" name="title" placeholder="Product Title" required value="{{ $product->productName }}">
                </div>
        
                <hr>
        
                <div>
                    <textarea class="form-control {{ $errors->has('description') ? ' alert-danger' : '' }}" name="description" placeholder="Product Description" value="{{ $product->productDesc }}" required></textarea>
                </div>
                
                <hr>
        
                <div class="form-group">
                    <input class="form-control {{ $errors->has('imgpath') ? ' alert-danger' : '' }}" type="text" name="imgpath" placeholder="img/(product you are creating)" value="{{ $product->imgpath }}" required>
                </div>
        
                <hr>

                <div class="form-group">
                    <input class="form-control {{ $errors->has('price') ? ' alert-danger' : '' }}" type="number" name="price" placeholder="Price:" value="{{ $product->price }}" required>
                </div>

                <hr>
                <div class="form-group {{ $errors->has('LRselect') ? ' alert-danger' : '' }}">
                    <select class="form-control" id="LRselect" name="LRselect">
                        <option>Left</option>
                        <option>Right</option>
                        <option>Whole Pair</option> 
                    </select>
                </div>

                <hr>

                <div class="form-group {{ $errors->has('gender') ? ' alert-danger' : '' }}">
                    <select class="form-control" id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <hr>

                <div class="form-group">
                    <input class="form-control {{ $errors->has('size') ? ' alert-danger' : '' }}" type="number" name="size" placeholder="Shoe size (UK)" value="{{ $product->size }}" required>
                </div>

                <hr>

                <div class="form-group">
                    <input class="form-control {{ $errors->has('colour') ? ' alert-danger' : '' }}" type="text" name="colour" placeholder="Main colour of shoe" value="{{ $product->colour }}" required>
                </div>

                <hr>

                <div class="form-group">
                    <input class="form-control {{ $errors->has('brand') ? ' alert-danger' : '' }}" type="text" name="brand" placeholder="Brand: E.g Adidas" value="{{ $product->brand }}" required>
                </div>

                <hr>

                <div class="form-group {{ $errors->has('style') ? ' alert-danger' : '' }}">
                    <select class="form-control" id="style" name="style">
                        <option>Sneakers / Casual</option>
                        <option>Dress Shoes</option>
                        <option>Work Shoes</option> 
                        <option>Sports Shoes</option>
                    </select>
                </div>

                <hr>

                <div class="form-group">
                    <div class="control">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </div>
            </form>
            <form method="POST" action="/products/{{ $product->id }}">
                @csrf
                @method('DELETE')
                <div class="form-group">
                        <div class="control">
                            <button type="submit" class="btn btn-primary">Delete Product</button>
                        </div>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </form>
        </div>
    </div>
</div>
<div class="col-md">
</div>

    

@stop