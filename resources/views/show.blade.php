@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p><strong>Product ID:</strong> {{ $product->product_id }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Stock:</strong> {{ $product->stock ?? 'N/A' }}</p>

        @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 200px;">
        @else
            <p>No image available</p>
        @endif

        <a href="{{ route('products.index') }}">Back to Products List</a>
    </div>
@endsection
