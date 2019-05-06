@extends("admin.masteradmin")

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <div>
                @if($errors->has('name'))
                    {{ $errors->first('name') }}
                @endif
            </div>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" required>
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address" name="address" required>
            <label for="exampleInputEmail1">Bathroom</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bathroom" name="bathroom" required>
            <label for="exampleInputEmail1">Bedroom</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bedroom" name="bedroom" required>
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" required>
            <label for="exampleInputEmail1">Status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status" name="status" required>
            <div>
                @if($errors->has('thong_tin'))
                    {{ $errors->first('thong_tin') }}
                @endif
            </div>
            <label for="exampleInputEmail1">Mo ta</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="thong_tin"></textarea>
            <div>
                @if($errors->has('image'))
                    {{ $errors->first('image') }}
                @endif
            </div>
            <input type="file" name="image">
            <div>
                <select name="category_id" class="form-control">
                    @foreach($cate as $key=>$value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
