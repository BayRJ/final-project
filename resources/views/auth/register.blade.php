<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Page</title>
  @vite('resources/css/app.css')
</head>
<body>

  <form action="{{route('register')}}" method="POST" class="flex flex-col">
    @csrf

    <h2>Register for an Account</h2>

    <label for="name">Name:</label>
    <input type="text" name="name" required value="{{old('name')}}">

    <label for="email">Email:</label>
    <input type="email" name="email" required value="{{old('email')}}">

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit" class="mt-4">Register</button>

    {{-- Validation Errors --}} 
    @if ($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach($errors->all() as $error)
        <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
      </ul>
    @endif

  </form>

</body>
</html>