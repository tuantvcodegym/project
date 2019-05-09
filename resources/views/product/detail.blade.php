<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
        </ul>
    </div>
    <h1>Thong tin chi tiet</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset("storage/$product->image") }}" alt="" width="100%" height="467px">
        </div>
        <div class="col-md-4 main-section">
            <div class="row">
                <div class="col-md-8">
                    @foreach($images as $key=>$value)
                        <div class="col-md-4">
                            <div class="data-1" style="margin: auto">
                                <div class="image">
                                    <img src="{{ asset("storage/$value->image") }}" alt="" width="200px" height="100px">
                                </div>
                                <h5></h5>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        {{ $images->links() }}
                    </div>
                </div>
                <div class="col-md-4">
                    @foreach($images as $key=>$value)
                        <img src="{{ asset("storage/$value->image") }}" alt="" width="100%" height="107px">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="detail">
                <p>Loai: {{ $product->name }}</p>
                <p>Address: {{ $product->address }}</p>
                <p>Bathroom: {{ $product->bathroom }}</p>
                <p>Bedroom: {{ $product->bedroom }}</p>
                <p>Price: {{ $product->price }}</p>
                <hr>
                <h5>Thong tin them: </h5>
                <p>{{ $product->thong_tin }}</p>
            </div>
            <div>
                @if($product->status != 'true')
                    <h5><a href="{{ route('customer.get', $product->id) }}">Thuê Nhà</a></h5>
                    @else
                    <h5><a>Trạng thái: Nhà đã được thuê</a></h5>
                    <a href="{{route('index')}}">Chọn nhà khác</a>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
    <!-- Hien thi phan comment cua nguoi dung -->
    <div class="row">
        <div class="col-md-12">
            <div style="margin-top: 20px ; border-top: 1px solid coral; padding-top: 10px; overflow: scroll; height: 200px">
                @foreach($comment as $value)
                    <span style="font-weight: bold">{{ $value->name }} : <small>{{ $value->content }}</small></span>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
    <!-- Hien thi phan comment cua nguoi dung -->
    @if(Auth::check())
    <div class="row">
        <div class="col-md-12">
            <form method="get" action="{{ route('comment', $product->id) }}">
                @csrf
                <p>Viet binh luan ... <i class="far fa-comment-dots" style="color: #3495e3"></i></p>
                <textarea class="form-control" rows="3" name="content" required></textarea>
                <br>
                <input type="submit" href="#" class="btn btn-primary" value="Comment">
            </form>
        </div>
    </div>
    @endif
    <br>
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
