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
        <form method="post">
            @csrf
            <div class="h1-1">
                <h1>Register</h1>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
                </div>
                <input type="text" name="name" placeholder="username" required>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif
                </div>
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('phone'))
                        {{ $errors->first('phone') }}
                    @endif
                </div>
                <input type="text" name="phone" placeholder="phone" required>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('address'))
                        {{ $errors->first('address') }}
                    @endif
                </div>
                <input type="text" name="address" placeholder="Address" required>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif
                </div>
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


