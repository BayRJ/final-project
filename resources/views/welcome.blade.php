<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <header>
        <nav>

            @guest
                <a href="{{route('show.login')}}">Login</a>
                <a href="{{route('show.register')}}">Register</a>
            @endguest

            @auth
                <span class="border-r-2 pr-2">
                    Hi there, {{ Auth::user()->name }}
                </span>
                <form action="{{route('logout')}}" method="POST" class="m-0">
                    @csrf

                    <button >Logout</button>
                </form>
            @endauth

        </nav>
    </header>

</body>
</html>