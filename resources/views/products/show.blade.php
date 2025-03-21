@extends('layout.productLayout')

@section('content')
    <h1>Product Item: {{ $productItem->name }}</h1>

    <p>Description: {{ $productItem->description }}</p>

    <p>Quantity: {{ $productItem->quantity }}</p>

    <p>Price: ${{ $productItem->price }}</p>


    <a href="{{ route('products.index') }}">Back to Inventory</a>
@endsection