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
        <form method="post" action="{{ route('updateProfile', $user->id) }}">
            @csrf
            <div class="h1-1">
                <h1>Profile</h1>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    @endforeach
                @endif
            </div>
            <div class="text-1">
                <input type="text" name="name" placeholder="username" required value="{{ $user->name }}">
            </div>
            <div class="text-1">
                <input type="email" name="email" placeholder="email" required value="{{ $user->email }}">
            </div>
            <div class="text-1">
                <input type="text" name="phone" placeholder="phone" required value="{{ $user->phone }}">
            </div>
            <div class="text-1">
                <input type="text" name="address" placeholder="Address" required value="{{ $user->address }}">
            </div>
            <div class="btn">
                <input type="submit" onclick="return alert('cap nhat profile thanh cong')">
            </div>
        </form>
    </div>
</div>
</body>
</html>
