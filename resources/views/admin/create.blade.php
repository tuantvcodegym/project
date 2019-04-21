@extends("admin.masteradmin")

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="thong_tin"></textarea>
            <input type="file" name="image">
        </div>
            <button type="submit" class="btn btn-primary" onclick="{{route('admin.create')}}">Submit</button>
    </form>
@endsection
