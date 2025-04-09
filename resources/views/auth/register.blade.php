@extends('layout.productLayout')

@section('content')
<div class="max-w-md mx-auto mt-16 p-6 bg-white rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">Register for an Account</h2>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" required value="{{ old('name') }}"
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" required value="{{ old('email') }}"
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="text-center">
            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition duration-200">
                Register
            </button>
        </div>
         <div class="mt-6 text-sm text-gray-500 text-center">
        Already have an account? 
        <a href="{{ route('login') }}" class="text-red-700 hover:underline font-medium">LOGIN</a> 
    </div>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mt-4 bg-red-100 border border-red-300 text-red-600 rounded-md p-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>
@endsection
