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
    <link rel="stylesheet" href="{{asset('css/content.css')}}">
    <link rel="stylesheet" href="{{asset('css/slide.css')}}">
    <link rel="stylesheet" href="{{ asset('css/customerSearch.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="header">
    <div class="header-1">
        <div class="row">
            <div class="col-md-4">
                <div class="text-p">
                    <p>TUANTRAN</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="list" style="z-index: 3">
                        <ul>
                            <li><a href="{{ route('index') }}" title="về trang chủ">HOME</a></li>
                            <li>Categories
                                <ul>
                                    @foreach($cate as $key=>$value)
                                        <li><a href="{{ route('getcategories', $value->id) }}">{{ $value->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#" class="a">Product</a></li>
                            <li><a href="{{ route('home.about') }}" title="Về chúng tôi">About us</a></li>
                            @if(Auth::check())
                                <li><a>Profile</a>
                                    <ul>
                                        <li><a href="{{ route('getProfile', Auth::user()->id) }}">Profile</a></li>
                                        <li><a href="{{ route('getPass', Auth::user()->id) }}">Update Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('getProfile', Auth::user()->id)}}">Name: {{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('logout') }}"><i class="fas fa-sign-out-alt" style="color: #38c172; padding-right: 5px;"></i>LogOut</a></li>
                            @else
                                <li><a href="#" class="a">Blog</a></li>
                                <li><a href="#" onclick="alert('No Update')">Testimonials</a></li>
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
        <!-- thay thế phần inclue -->
        <div class="inclu">
{{--            @include('home.slide')--}}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h4>Bạn đang chọn đúng người phục vụ</h4>
                    </div>
                    <div class="carousel-item">
                        <h4>Bạn có thể làm điều đó, và chúng tôi có thể giúp</h4>
                    </div>
                    <div class="carousel-item">
                        <h4>Chúng tôi luôn cố gắng hơn</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- thay thế phần inclue -->
        <div class="customerSearch">
            <!-- thay thế phần inclue -->
{{--            @include('home.customerSearch')--}}
            <div class="form">
                <div class="form-2">
                    <div>
                        <h3>Find homes in Ha Noi on Aribnb</h3>
                        <p>Discover entire home end private rooms perfect for any trip.</p>
                    </div>
                    <form method="get" action="{{ route('searchCustomer') }}">
                        @csrf
                        <p>WHERE</p>
                        <div class="input-1">
                            <input type="text" placeholder="AnyWhere" class="input-2" name="address" required>
                        </div>

                        <div class="input-1">
                            <p>Bathroom</p>
                            <input type="number" placeholder="Bathroom" class="input-2" name="bathroom" required>
                        </div>
                        <div class="input-1">
                            <p>Bedroom</p>
                            <input type="number" placeholder="Bedroom" class="input-2" name="bedroom" required>
                        </div>
                        <div class="input-1">
                            <p>About Price</p>
                            <input type="text" placeholder="form" name="price" required>
                            to
                            <input type="text" placeholder="to" name="price-2" required>
                        </div>
                        <div class="button">
                            <button type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- thay thế phần inclue -->
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
                <hr>
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
                <hr>
                <!-- phan dang test -->
                <div class="product">
                    <div class="container">
                        <h3 style="text-align: center; color: #3495e3; font-weight: bold">Aribnb was :</h3>
                        <p style="font-weight: bold">a startup with a model that connects people who need to rent or rent rooms with people who have rooms for rent around the world through a mobile application similar to Uber car sharing application</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <img src="http://vinavic.vn/wp-content/uploads/2016/09/mau-thiet-ke-nha-biet-thu-dep-2-tang-BT1623-11.jpg" width="820px" height="500px;" style="margin-left: 110px">
                                </div>
                                <p style="text-align: left">There is nothing in the world as sweet as a home”. “East or West, home is the best”. Home is the symbol of human togetherness- a place where all of us learn the first steps of life. For most people the very thought of home brings fond memories, nostalgic feelings.</p>
                                <p style="text-align: left">My home is situated in a suburb called Gandhi Nagar in the city of Guwahati, the capital of Assam. I was born in this city although my parents have migrated to the place due to occupation.</p>
                                <p style="text-align: left">As for me, I feel a part of the city and consider it as my hometown. The locality where I live falls within the periphery of Guwahati Club, one of the major commercial centres of the city and is noted for its educational institutions, Sports facilities and green surroundings. My house is only a few yards from this commercial centre. The area is inhabited mostly by government servants, high-ranking officials and bureaucrats</p>
                                <p style="text-align: left">My house is situated at the side of a bye-lane leading to Guwahati club. It is a two-storied building constructed by my father about ten years ago. The top floor has been rented out. The ground floor, which we use, has four bedrooms, a drawing room part which also serves as a dinning room, a kitchen and a bathroom.</p>
                                <p style="text-align: left">My brother and myself share a room, while a room has been given to my elder sister. The third room which is the largest room in the house is used by our parents while the fourth room is kept as a guest room. All the living rooms have floor carpets, while the drawing room where we entertain our guests and watch T.V. has marble floor and an artistically carved showcase. The showcase contains numerous trophies, beautiful mementos and several attractive handicraft exhibits.</p>
                                <p style="text-align: left">The house has a little porch in front where my father keeps his car. The portion between the porch and the road is used for gardening, which is taken care of by my mother. There is a small patch of land behind the house which is used for cultivation of vegetables and for dumping of scraps and useless articles of the house.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- thay thế phần inclue -->
        <div class="content-file">
{{--            @include("home.content")--}}
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-4">
                            <div class="m7">
                                <h2>Get notified on each updates.</h2>
                                <input type="text">
                                <input type="submit" value="subscribe">
                                <small>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- thay thế phần inclue -->
    </div>
</div>
<script>
    $(function () {
        $(".a").click(function () {
            $("html").animate({scrollTop: 1000}, 900);
        })
    })
</script>
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
