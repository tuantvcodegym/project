@extends("admin.masteradmin")
@section('content')
    <br>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Ngay check_in</th>
            <th scope="col">Ngay chech_out</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customer as $key=>$value)
            <tr>
                <th scope="row">{{ $value->id }}</th>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td>{{ $value->address }}</td>
                <td>{{ $value->check_in }}</td>
                <td>{{ $value->check_out }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button onclick="window.history.go(-1); return false;" class="btn btn-primary"> <-- Back</button>
@endsection
