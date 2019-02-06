@extends('layouts.auth')
@section('content')
<div class="container text-center loginform">
    <h3 class="text-center">Create A New Product</h3>
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
</div>
@stop