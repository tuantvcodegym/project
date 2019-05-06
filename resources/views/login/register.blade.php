<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{{--    <link rel="stylesheet" href="{{asset('css/style.css')}}">--}}
</head>
<body>
<div class="all">
    <div class="login-1">
        <form method="post">
            @csrf
            <div class="h1-1">
                <h1>Register</h1>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    @endforeach
                @endif
            </div>
            <div class="text-1">
                <input type="text" name="name" placeholder="username" required>
            </div>
            <div class="text-1">
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="text-1">
                <input type="text" name="phone" placeholder="phone" required>
            </div>
            <div class="text-1">
                <input type="text" name="address" placeholder="Address" required>
            </div>
            <div class="text-1">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="btn">
                <input type="submit" onclick="{{route('postRegister')}}">
            </div>
        </form>
    </div>
</div>
</body>
</html>


