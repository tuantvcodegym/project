@extends("layouts.master")
@section('content')
    <div class="row">
        <!-- sau này sẽ foreach data tại đây -->
        @foreach($product as $key=>$value)
            <div class="col-md-4">
                <div class="data-1">
                    <div class="image">
                        <img src="{{ asset("storage/$value->image") }}" alt="" width="320px" height="213px">
                    </div>
                    <h5>{{ $value->name }}</h5>
                    <p>Gia san pham</p>
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
    @endforeach
    <!-- kết thúc foreach tại đây -->
    </div>
@endsection