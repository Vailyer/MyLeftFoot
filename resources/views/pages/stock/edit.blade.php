@extends('layouts.default')
@section('content')

    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="form-control {{ $errors->has('title') ? ' alert-danger' : '' }} " name="title" placeholder="Title" value="{{ $product->productName }}">
            </div>
        </div>
        <div class="form-group">
            <label class="title" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="form-control {{ $errors->has('description') ? ' alert-danger' : '' }}">{{ $product->productDesc }}</textarea>
            </div>

        </div>
        <div class="form-group">
            <label class="label" for="imgpath">Image Path</label>

            <div class="control">
                <input type="text" class="form-control {{ $errors->has('imgpath') ? ' alert-danger' : '' }}" name="imgpath" placeholder="Image Path" value="{{ $product->imgpath }}">
            </div>
        </div>
        <div class="form-group">
                <label class="label" for="stockAvailable">Stock Available</label>
                
                <div class="control">
                    <input type="number" class="form-control {{ $errors->has('stockAvailable') ? ' alert-danger' : '' }}" name="stockAvailable" placeholder="Stock Available" value="{{ $product->stockAvailable }}">
                </div>
        </div>
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

@stop