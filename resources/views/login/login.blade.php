<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="all">
    <div class="login-1">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post">
            @csrf
            <div class="h1-1">
                <h1>Login</h1>
            </div>
            <div class="text-1">
                <input type="email" name="name" placeholder="username" required>
            </div>
            <div class="text-1">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="btn">
                <input type="submit" value="Login" onclick="{{route('postLogin')}}">
            </div>
        </form>
        <div class="btn-2">
            <a href="{{route('getRegister')}}">Register</a>
            <a href="#">Login facebook</a>
        </div>
    </div>
</div>
</body>
</html>

