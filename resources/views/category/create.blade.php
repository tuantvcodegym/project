<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<br>
<div class="container">
    <div class="content">
        <h2>Them moi The Loai</h2>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name Category</label>
                <div>
                    @if($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
                </div>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" name="name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <div>
                    @if($errors->has('description'))
                        {{ $errors->first('description') }}
                    @endif
                </div>
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="{{ route('category.create') }}">Save</button>
            <button type="submit" class="btn btn-primary" onclick="window.history.go(-1); return false;">Back</button>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


