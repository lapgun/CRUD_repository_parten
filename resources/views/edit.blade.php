<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('update',$customer->id)}}">
    @csrf
    <div class="form-group" >
        <label for="exampleInputEmail1">first name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="first_name" value="{{$customer->first_name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">last name </label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="last_name" value="{{$customer->last_name}}" >
    </div>
    <button type="submit" class="btn btn-primary">upddate</button>
</form>
</body>
</html>
