<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="header">
    <div class="header-1">
        <div class="row">
            <div class="col-md-4">
                <div class="text-p">
                    <p>SELLING</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="list">
                        <ul>
                            <li><a href="{{ route('index') }}">HOME</a></li>
                            <li>Categories
                                <ul>
                                    @foreach($cate as $key=>$value)
                                        <li><a href="{{ route('getcategories', $value->id) }}">{{ $value->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Special</a></li>
                            <li><a href="#">Testimonials</a></li>
                            @if(Auth::check())
                                <li><a href="{{ route('getProfile', Auth::user()->id)}}">Name: {{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('logout') }}">LogOut</a></li>
                            @else
                                <li><a href="{{route('getLogin')}}" class="btn btn-primary"><i class="fas fa-lock"></i>Log in</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="video">
            <i class="fas fa-play"></i>
            <p><a href="#">WATCH VIDEO</a></p>
        </div>
        <div class="text-h2">
            <h2>Chúng tôi có một niềm đam mê trong việc tạo ra không gian mới và độc đáo</h2>
            <p>Ban có thể đến bất kỳ nơi nào trên thế giới mà không phải đi lòng vòng</p>
        </div>
        <div class="inclu">
            @include('home.slide')
        </div>
        <div class="customerSearch">
            @include('home.customerSearch')
        </div>
    </div>
    <div class="all-1">
        <div class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="product-1">
                            <h5>San pham pho bien</h5>
                            <h2>Our Product</h2>
                            <p>orem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>New Products</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-group" method="post" action="{{route('search')}}">
                            @csrf
                            <input type="text" name="search">
                            <input type="submit">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <!-- sau này sẽ foreach data tại đây -->
                    @foreach($product as $key=>$value)
                        @if($value->status != 'true')
                        <div class="col-md-4">
                            <div class="data-1">
                                <div class="image">
                                    <img src="{{ asset("storage/$value->image") }}" alt="" width="320px" height="213px">
                                </div>
                                <h5>{{ $value->name }}</h5>
                                <p>Price {{ $value->price }} $</p>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <a class="btn btn-primary" href="#">Cart</a>
                                        <a class="btn btn-primary" href="{{ route('product.detail', $value->id) }}">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <!-- kết thúc foreach tại đây -->
                </div>
                <div class="paginate">
                    {{ $product->links() }}
                </div>
                <!-- Danh sach san pham thero the loai -->
                <h3>Product are leaseding</h3>
                <div class="row"><!-- sau này sẽ foreach data The laoi tại đây -->
                    @foreach($product as $key=>$value)
                        @if($value->status == 'true')
                        <div class="col-md-4">
                            <div class="data-1">
                                <div class="image">
                                    <img src="{{ asset("storage/$value->image") }}" alt="" width="320px" height="213px">
                                </div>
                                <h5>{{ $value->name }}</h5>
                                <p>Price {{ $value->price }} $</p>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <a class="btn btn-primary" href="#">Cart</a>
                                        <a class="btn btn-primary" href="{{ route('product.detail', $value->id) }}">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                @endforeach
                <!-- kết thúc foreach tại đây -->
                </div>
            </div>
        </div>
        <div class="content-file">
            @include("home.content")
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
