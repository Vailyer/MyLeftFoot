@extends('layouts.default')
@section('content')

    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('PATCH')
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $product->productName }}">
            </div>
        </div>
        <div class="field">
            <label class="title" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="textarea">{{ $product->productDesc }}</textarea>
            </div>

        </div>
        <div class="field">
            <label class="label" for="imgpath">Image Path</label>

            <div class="control">
                <input type="text" name="imgpath" placeholder="Image Path" value="{{ $product->imgpath }}">
            </div>
        </div>
        <div class="field">
                <label class="label" for="stockAvailable">Image Path</label>
                
                <div class="control">
                    <input type="number" name="stockAvailable" placeholder="Stock Available" value="{{ $product->stockAvailable }}">
                </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Product</button>
            </div>
        </div>
    </form>
    <form method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('DELETE')
        <div class="field">
                <div class="control">
                    <button type="submit" class="button">Delete Product</button>
                </div>
        </div>
    </form>

@stop