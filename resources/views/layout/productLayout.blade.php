<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tasks</title>
        @vite('resources/css/app.css')
    <style>

 th, td {
            padding: 15px;
  border: 1px solid;
}
        
    </style>
</head>
<body>
    @include('partials.nav')
    @yield('content')
</body>
</html>