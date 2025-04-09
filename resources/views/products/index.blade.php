@extends('layout.productLayout')
    
@section('content')
<div class="w-screen min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4">
    <div class="max-w-5xl w-full bg-white rounded-xl shadow-md p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Product List</h1>

        {{-- Success/Error Messages --}}
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                {{ session('error') }}
            </div>
        @endif

        {{-- Product Table --}}
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Name</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Description</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Quantity</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Price</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($productItems as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 text-lg font-bold">{{ $item->name }}</td>
                            <td class="px-4 py-3">{{ $item->description }}</td>
                            <td class="px-4 py-3">{{ $item->quantity }}</td>
                            <td class="px-4 py-3">${{ number_format($item->price, 2) }}</td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="{{ route('products.edit', $item->id) }}"
                                   class="text-yellow-600 font-semibold hover:underline">Edit</a>

                                <form action="{{ url('/products/' . $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Are you sure?')"
                                            class="text-red-600 font-semibold hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Add New Item Button --}}
        <div class="text-center mt-6">
            <a href="{{ url('/products/create') }}"
               class="inline-block px-6 py-3 bg-green-700 hover:bg-green-800 text-white text-lg font-bold rounded-full transition duration-200">
                Add New Item
            </a>
        </div>
    </div>
</div>
@endsection
