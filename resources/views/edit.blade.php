@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="product_id">Product ID</label>
                <input type="text" name="product_id" class="form-control" id="product_id" value="{{ $product->product_id }}" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" class="form-control" id="stock" value="{{ $product->stock }}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
