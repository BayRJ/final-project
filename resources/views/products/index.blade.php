@extends('layout.productLayout')
    
@section('content')
    <h1>Product List</h1>



    @if (session('success'))

        <p style="color: green;">{{ session('success') }}</p>

    @endif



    @if (session('error'))

        <p style="color: red;">{{ session('error') }}</p>

    @endif

    <table border="1">

    <thead>

        <tr>

            <th>Name</th>

            <th>Description</th>

            <th>Quantity</th>

            <th>Price</th>

            <th>Actions</th>

        </tr>

    </thead>

    <tbody>

        @foreach ($productItems as $item)

            <tr>
                <td>{{ $item->name }}</td>

                <td>{{ $item->description }}</td>

                <td>{{ $item->quantity }}</td>

                <td>${{ number_format($item->price, 2) }}</td>

                <td>

                <form action="{{'http://127.0.0.1:8000/products/' . $item->id }}" method="POST">



                    @csrf

                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>

                </form>

                <a href="{{route('products.edit', $item->id) }}">Edit Item</a>

                </td>

            </tr>

        @endforeach

    </tbody>

    </table>



    <a href="{{'http://127.0.0.1:8000/products/create' }}">Add New Item</a>

@endsection