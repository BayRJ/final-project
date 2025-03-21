@extends('layout.productLayout')

@section('content')
    
<h1>Edit Item: {{ $name }}</h1>


<!-- Display validation errors if any -->

@if ($errors->any())

    <div style="color: red;">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form method="POST" action="/products/{{$id}}">

    @csrf

    @method('PUT')


    <label for="name">Name:</label>

    <input type="text" name="name" value="{{ old('name', $name) }}" required>


    <label for="description">Description:</label>

    <input type="text" name="description" value="{{ old('description', $description) }}" required>



    <label for="quantity">Quantity:</label>

    <input type="number" name="quantity" value="{{ old('quantity', $quantity) }}" required>



    <label for="price">Price:</label>

    <input type="number" name="price" value="{{ old('price', $price) }}" required>



    <button type="submit">Update Product</button>

</form>



<a href="{{'http://127.0.0.1:8000/products/'}}">Back to Inventory</a>

@endsection