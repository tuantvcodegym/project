@extends("admin.masteradmin")

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <div style="color: red">
                @if($errors->has('name'))
                    {{ $errors->first('name') }}
                @endif
            </div>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" required>
            <label for="exampleInputEmail1">Address</label>
            <div style="color: red;">
                @if($errors->has('address'))
                    {{ $errors->first('address') }}
                @endif
            </div>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address" name="address" required>
            <label for="exampleInputEmail1">Bathroom</label>
            <div style="color: red;">
                @if($errors->has('bathroom'))
                    {{ $errors->first('bathroom') }}
                @endif
            </div>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bathroom" name="bathroom" required>
            <label for="exampleInputEmail1">Bedroom</label>
            <div style="color: red">
                @if($errors->has('bedroom'))
                    {{ $errors->first('bedroom') }}
                @endif
            </div>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bedroom" name="bedroom" required>
            <label for="exampleInputEmail1">Price</label>
            <div style="color: red">
                @if($errors->has('price'))
                    {{ $errors->first('price') }}
                @endif
            </div>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" required>
            <label for="exampleInputEmail1">Status</label>
            <div style="color: red">
                @if($errors->has('status'))
                    {{ $errors->first('status') }}
                @endif
            </div>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status" name="status" required>
            <label for="exampleInputEmail1">Mo ta</label>
            <div style="color: red;">
                @if($errors->has('thong_tin'))
                    {{ $errors->first('thong_tin') }}
                @endif
            </div>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="thong_tin"></textarea>
            <div style="color: red">
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
