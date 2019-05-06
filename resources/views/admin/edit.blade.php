@extends("admin.masteradmin")

@section('content')
    <div class="container">
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.update', $product->id) }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" value="{{ $product->name }}">
            </div>
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address" name="address" required value="{{ $product->address }}">
            <label for="exampleInputEmail1">Bathroom</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bathroom" name="bathroom" required value="{{ $product->bathroom }}">
            <label for="exampleInputEmail1">Bedroom</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bedroom" name="bedroom" required value="{{ $product->bedroom }}">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" required value="{{ $product->price }}">
            <label for="exampleInputEmail1">Status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status" name="status" value="{{ $product->status }}">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text">{{ $product->thong_tin }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Chon file</label>
                <input type="file" class="form-control" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection