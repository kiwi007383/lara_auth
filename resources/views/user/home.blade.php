<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>This is the customer home page.</h3>
    <span><a href="{{ url('user/home') }}">Home</a></span> |
    <span><a href="{{ url('user/about') }}">About</a></span> |
    <span><a href="{{ url('user/service') }}">Service</a></span> |
    <span><a href="{{ url('userPage') }}">UserPage</a></span>
    <h3 class="" style="color: red">
        {{ session('AuthMessage') }}
    </h3>

    <h3>
        {{ Auth::user()->role }}
    </h3>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Logout">
    </form>
</body>

</html>
