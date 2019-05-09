<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .nav{
            background: #686868;
            margin-bottom: 10px;
        }
        .nav-pills .nav-link.active{
            height: 85px;
            background: none;
            line-height: 75px;
        }
        .nav-pills .nav-link.active:hover{
            border-bottom: 1px solid #1f6fb2;
            background: #38c172;
            transition: 0.7s linear;
        }
        .fas fa-users-cog{
            padding-right: 10px;
        }
        .nav a i{
            padding-right: 10px;
            color: #ced4da;
        }
        .nav-item a{
            color: white;
        }
        .logout{
            text-align: right;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="logout">
                <p>{{ Auth::user()->name }} <a class="btn btn-primary" href="{{url('logout')}}">Logout</a></p>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fas fa-user-lock"></i>Admin</a>
        </li>
    </ul>
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills">
                <a class="nav-link active" href="{{ route('admin.list') }}"><i class="fas fa-home"></i>Home</a>
                <a class="nav-link active"><i class="fas fa-user"></i>Profile</a>
                <a class="nav-link active" href="{{route('admin.store')}}"><i class="fas fa-plus"></i>Create</a>
                <a class="nav-link active" href="{{route('category.store')}}"><i class="fas fa-plus"></i>Create Category</a>
                <a class="nav-link active" href="{{route('upload.file')}}"><i class="fas fa-plus"></i>Create Images</a>
                <a class="nav-link active" href="{{route('admin.customer')}}"><i class="fas fa-plus"></i>Lich thue nha</a>
                <a class="nav-link active"><i class="fas fa-cog"></i>Settings</a>
            </div>
        </div>
        <div class="col-md-9">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $key=>$value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td><img src="{{asset("storage/$value->image")}}" alt="" width="100px" height="50px"></td>
                    <td><a href="{{ route('admin.edit', $value->id) }}" class="btn btn-primary">Sua</a></td>
                    <td><a href="{{ route('admin.delete', $value->id) }}" class="btn btn-primary">Xoa</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $list->links() }}
        </div>
        <div class="col-md-12">
            <h4>Danh sách nhà đang cho thuê</h4>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $key=>$value)
                    @if($value->status == 'true')
                    <tr>
                        <th scope="row">{{ $value->id }}</th>
                        <td>{{ $value->name }}</td>
                        <td><img src="{{asset("storage/$value->image")}}" alt="" width="100px" height="50px"></td>
                        <td><a href="{{ route('admin.edit', $value->id) }}" class="btn btn-primary">Sua</a></td>
                        <td><a href="{{ route('admin.delete', $value->id) }}" class="btn btn-primary">Xoa</a></td>
                        <td><a href="{{ route('admin.detail', $value->id) }}" class="btn btn-primary">detail</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
