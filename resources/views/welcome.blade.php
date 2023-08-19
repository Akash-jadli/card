<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Your Application</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                Welcome to Your Application
            </div>

            <div class="links">
                @auth
                    <a href="{{ url('/admin') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</body>
</html>
