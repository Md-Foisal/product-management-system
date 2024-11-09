@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product List</h1>

        <!-- Search form -->
        <form method="GET" action="{{ route('products.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by Product ID or Description" value="{{ request()->query('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <!-- Sorting links -->
        <div class="mb-3">
            <a href="{{ route('products.index', ['sort' => 'name']) }}" class="btn btn-link">Sort by Name</a>
            <a href="{{ route('products.index', ['sort' => 'price']) }}" class="btn btn-link">Sort by Price</a>
        </div>

        <!-- Product table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
