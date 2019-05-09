@extends("admin.masteradmin")
@section('content')
    <br>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset("storage/$product->image") }}" alt="" width="250px" height="300px">
        </div>
        <div class="col-md-4">
            @foreach($customer as $value)
                <p style="font-weight: bold">Khach hang: <small>{{ $value->name }}</small></p>
            @endforeach
            <p style="font-weight: bold">Name House: <small>{{ $product->name }}</small></p>
            <p style="font-weight: bold">Thong tin: <small>{{ $product->thong_tin }}</small></p>
            <p style="font-weight: bold">Address: <small>{{ $product->address }}</small></p>
            <p style="font-weight: bold">Bathroom: <small>{{ $product->bathroom }}</small></p>
            <p style="font-weight: bold">Bedroom: <small>{{ $product->bedroom }}</small></p>
            <p style="font-weight: bold">Price: <small>{{ $product->price }} $</small></p>
        </div>
        <div class="col-md-4">

        </div>
    </div>
@endsection
