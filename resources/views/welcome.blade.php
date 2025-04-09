<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
        @vite('resources/css/app.css')

</head>
<body class="overflow-hidden bg-slate-300">
  @include('partials.nav')



<div class="w-screen min-h-screen flex flex-col items-center justify-center bg-gray-50 text-center px-4">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Our Product Inventory</h1>
    <p class="text-gray-600 max-w-md mb-6">
        Here, you can create, view, update, and manage all your products efficiently. 
        Make sure you're logged in to access full functionality like editing and adding new items.
    </p>

    <a href="{{ route('products.index') }}"
        class="inline-block px-6 py-3 bg-red-700 hover:bg-red-800 text-white text-lg font-semibold rounded-full transition duration-200">
        View Products
    </a>

    <div class="mt-10 text-sm text-gray-500">
        Don't have an account? 
        <a href="{{ route('register') }}" class="text-red-700 hover:underline font-medium">Register</a> or 
        <a href="{{ route('login') }}" class="text-red-700 hover:underline font-medium">Login</a> to get started.
    </div>
</div>


</body>
</html> 