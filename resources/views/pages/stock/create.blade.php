@extends('layouts.default')
@section('content')
<h1>Create A new product</h1>
<form method="POST" action="/products"> 
    @csrf        

    <div class="form-group">
        <input class="form-control {{ $errors->has('title') ? ' alert-danger' : '' }} " type="text" name="title" placeholder="Product Title" required value="{{ old('title') }}">
    </div>

    <hr>

    <div>
        <textarea class="form-control {{ $errors->has('description') ? ' alert-danger' : '' }}" name="description" placeholder="Product Description" value="{{ old('description') }}" required></textarea>
    </div>
    
    <hr>

    <div class="form-group">
        <input class="form-control {{ $errors->has('imgpath') ? ' alert-danger' : '' }}" type="text" name="imgpath" placeholder="img/(product you are creating)" value="{{ old('imgpath') }}" required>
    </div>

    <hr>

    <div class="form-group">
        <input class="form-control {{ $errors->has('stockAvailable') ? ' alert-danger' : '' }}" type="number" name="stockAvailable" placeholder="Stock Available" value="{{ old('stockAvailable') }}" required>
    </div>

    <hr>

    <button class="btn btn-primary" type="submit">Create Product</button>

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