@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Product</h1>

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="product_id">Product ID</label>
                <input type="text" name="product_id" class="form-control" id="product_id" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" id="price" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" class="form-control" id="stock">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection
