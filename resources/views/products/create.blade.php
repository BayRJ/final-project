@extends('layout.productLayout')

@section('content')
<h1>Create a New Inventory Item</h1>


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



<form method="POST" action="{{'http://127.0.0.1:8000/products/' }}">

    @csrf



    <label for="name">Name:</label>

    <input type="text" name="name" value="{{ old('name') }}" required>


    <label for="description">Description:</label>

    <input type="text" name="description" value="{{ old('description') }}" required>


    <label for="quantity">Quantity:</label>

    <input type="number" name="quantity" value="{{ old('quantity') }}" required>

    

    <label for="price">Price:</label>

    <input type="number" name="price" value="{{ old('price') }}" required>

    

    <button type="submit">Create Item</button>

</form>



<a href="{{ 'http://127.0.0.1:8000/products/' }}">Back to Inventory</a>
@endsection