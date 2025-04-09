@extends('layout.productLayout')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Product: {{ $productItem->name }}</h1>

    <div class="space-y-2 text-gray-700">
        <p><span class="font-semibold">Description:</span> {{ $productItem->description }}</p>
        <p><span class="font-semibold">Quantity:</span> {{ $productItem->quantity }}</p>
        <p><span class="font-semibold">Price:</span> ${{ number_format($productItem->price, 2) }}</p>
    </div>

    <div class="mt-6">
        <a href="{{ route('products.index') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            ← Back to Inventory
        </a>
    </div>
</div>
@endsection
