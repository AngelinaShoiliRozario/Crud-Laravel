@include('Navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <form action="/update_by_id/{{$product->id}}" method="POST">
        @csrf
       
            <h1 for="">ID {{$product->id}}</h1>
            <br>
            <label for="">NAME</label>
            <input type="text" name="name" value="{{$product->name}}">
            <br><br>
            <label for="">DETAIL</label>
            <input type="text" name="detail" value="{{$product->detail}}">
            <button type="submit">UPDATE</button>
   
    </form>
</body>
</html>

