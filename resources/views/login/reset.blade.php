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
        <form method="post" action="{{ route('updatePass', Auth::user()->id) }}">
            @csrf
            <div class="h1-1">
                <h1>Update</h1>
            </div>
            <div class="text-1">
                <input type="email" name="email" placeholder="email" value="{{ Auth::user()->email }}" readonly>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('present_password'))
                        {{ $errors->first('present_password') }}
                    @endif
                </div>
                <input type="password" name="present_password" placeholder="Present password" required>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif
                </div>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="text-1">
                <div style="color: red">
                    @if($errors->has('confirm_password'))
                        {{ $errors->first('confirm_password') }}
                    @endif
                </div>
                <input type="password" name="confirm_password" placeholder="confirm password" required>
            </div>
            <div class="btn">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</div>
</body>
</html>


