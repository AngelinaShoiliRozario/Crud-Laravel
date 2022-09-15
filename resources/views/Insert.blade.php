@include('Navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/store" method="POST">
        @csrf
        <label for="">ID</label>
        <input type="text" name="id">
        @error('id')
         <p style="color:red;">{{$message}}</p>   
        @enderror
        <label for="">NAME</label>
        <input type="text" name="name">
        @error('name')
         <p style="color:red;">{{$message}}</p>   
        @enderror
        <label for="">DETAIL</label>
        <input type="text" name="detail">
        @error('detail')
         <p style="color:red;">{{$message}}</p>   
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>