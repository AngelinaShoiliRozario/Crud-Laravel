@include('Navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register Here</h1>
    <form action="/save_people" method="post" enctype="multipart/form">
        @csrf
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Email</label>
        <input type="text" name="email"><br><br>
        <label>Password</label>
        <input type="text" name="password"><br><br>
        <label>Is Admin</label>
        <input type="text" name="isAdmin"><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>