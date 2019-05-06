@extends("admin.masteradmin")
@section('content')
    <div class="container">
        <div class="row">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <select name="product_id">
                    @foreach($product as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                <input type="file" name="file[]" multiple>
                <input type="submit">
            </form>
        </div>
    </div>
@endsection
