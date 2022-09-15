@include('Navbar')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
       <div>

   
            <h1>LOG IN</h1>

        <form action="/checkrole" method='POST'>
            @csrf
            <label >Enter Email</label>
            <input type="email" name='email'>
            <br> <br>
            <label ">Enter Password</label>
            <input type="password" name='password'> <br> <br>
            <input type="submit" value="Login" />
        </form>
       </div>
    </body>
</html>
