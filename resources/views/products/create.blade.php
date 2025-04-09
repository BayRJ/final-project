@extends('layout.productLayout')

@section('content')
<div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-2xl shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Create a New Inventory Item</h1>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/products') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="description" value="{{ old('description') }}" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input type="number" name="quantity" value="{{ old('quantity') }}" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="price" value="{{ old('price') }}" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="text-center">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-200">
                Create Item
            </button>
        </div>
    </form>

    <div class="mt-6 text-center">
        <a href="{{ url('/products') }}" class="text-blue-600 hover:underline">Back to Inventory</a>
    </div>
</div>
@endsection
