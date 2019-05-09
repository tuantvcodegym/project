<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>
<body>
<br>
<div class="container">
    <div class="menu">
        <ul>
            <li><a href="{{ route('index') }}">HOME</a></li>
            <li>
                <a href="#"></a>
            </li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </div>
    <h4>Cam on ban da su dung dich vu cua chung toi :</h4>
    <div class="row">
        <div class="col-md-6" style="border-top: 1px solid #d3d9df; padding-top: 20px; position: relative; border-right: 1px solid #d3d9df">
            <div class="row">
                <div class="col-md-8">
                    <h5><i class="far fa-address-card" style="margin-right: 5px; color: #3495e3"></i>Profile :</h5>
                    <p><i class="fas fa-user" style="margin-right: 5px; color: #3495e3"></i>  First name: {{ $user->name }}</p>
                    <p><i class="fas fa-envelope" style="margin-right: 5px; color: #3495e3"></i> Email: {{ $user->email }}</p>
                    <p><i class="fas fa-phone-square" style="margin-right: 5px; color: #3495e3"></i> Phone : {{ $user->phone }}</p>
                    <p><i class="fas fa-map-marked-alt" style="margin-right: 5px; color: #3495e3"></i> Address: {{ $user->address }}</p>
                    <p><i class="fas fa-history" style="margin-right: 5px; color: #3495e3"></i> Register day : {{ $user->created_at }}</p>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('profile', $user->id) }}" class="btn btn-primary">Update Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="border-top: 1px solid grey; padding-top: 20px">
            <h5 style="font-weight: bold">Rental History</h5>
            @foreach($customer as $key=> $value)
                <p style="font-weight: bold">Name : {{ $value->name }}</p>
                <p><i class="fas fa-envelope" style="margin-right: 5px; color: #3495e3"></i>Email: {{ $value->email }}</p>
                <p><i class="fas fa-phone-square" style="margin-right: 5px; color: #3495e3"></i>Number Phone : {{ $value->phone }}</p>
                <p><i class="fas fa-house-damage" style="margin-right: 5px; color: #3495e3"></i>Apartment: {{ $value->name_house }}</p>
                <p><i class="fas fa-map-marked-alt" style="margin-right: 5px; color: #3495e3"></i>Address: {{ $value->address }}</p>
                <p><i class="fas fa-toilet-paper" style="margin-right: 5px; color: #3495e3"></i>Number Bathroom: {{ $value->bathroom }}</p>
                <p><i class="fas fa-cloud-moon" style="margin-right: 5px; color: #3495e3"></i>Number Bedroom: {{ $value->bedroom }}</p>
                <p><i class="far fa-money-bill-alt" style="margin-right: 5px; color: #3495e3"></i>Price: {{ $value->price }} $ / Day</p>
                <p><i class="far fa-check-circle" style="margin-right: 5px; color: #3495e3"></i>Check-in day: {{ $value->check_in }}</p>
                <p><i class="far fa-check-circle" style="margin-right: 5px; color: #3495e3"></i>check-out day: {{ $value->check_out }}</p>
                <p><i class="fas fa-sort-numeric-up" style="margin-right: 5px; color: #3495e3"></i>Total number day: {{ floor((abs(strtotime($value->check_out) - strtotime($value->check_in)))/(60*60*24)) }} Day</p>
                <p><i class="fas fa-donate" style="margin-right: 5px; color: #3495e3"></i>Total Payment: {{ $value->price * (floor((abs(strtotime($value->check_out) - strtotime($value->check_in)))/(60*60*24)))}} $</p>
                <p><i class="fas fa-history" style="margin-right: 5px; color: #3495e3"></i>Rental History : {{ $value->updated_at }}</p>
            @if(floor((abs(strtotime($value->check_out) - strtotime($value->check_in)))/(60*60*24)) != 1)
                <button class="btn btn-primary" onclick="return confirm('cảm ơn bạn đã sử dụng dịch vụ')"><i class="fas fa-ban" style="margin-right: 5px; color: #ced4da"></i><a href="{{ route("cancelBathroom", $value->product_id) }}" style="color: white">Hủy</a></button>
                @else
                    <button class="btn btn-primary" onclick="return alert('Bạn không thể hủy phòng trước một ngày')"><i class="fas fa-ban" style="margin-right: 5px; color: #ced4da"></i>Hủy</button>
            @endif
                <hr>
            @endforeach
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><button class="btn btn-primary" onclick="window.history.go(-1); return false;"><-- Back</button></li>
        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

