@extends('layout.productLayout')

@section('content')
<div class="max-w-md mx-auto mt-16 p-6 bg-white rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">Log In To Your Account</h2>

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="text-center">
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition duration-200">
                Log In
            </button>
        </div>
            <div class="mt-6 text-sm text-gray-500 text-center">
        Don't have an account? 
        <a href="{{ route('register') }}" class="text-red-700 hover:underline font-medium">REGISTER</a> 
    </div>

        {{-- Validation errors --}}
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
