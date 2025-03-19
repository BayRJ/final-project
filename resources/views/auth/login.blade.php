<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  @vite('resources/css/app.css')
</head>
<body>

  <form action="{{route('login')}}" method="POST">
  @csrf

  <h2>Log In To You Account</h2>

  <label for="email">Email:</label>
  <input type="email" name="email" value="{{old('email')}}" required>

  <label for="password">Password:</label>
  <input type="password" name="password" required>

  <button type="submit" class="mt-4">Log In</button>


  {{-- Validation errors --}}
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