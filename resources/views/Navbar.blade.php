<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul{
            list-style-type:none;
            display: flex;
            gap:10px;
        }
        li a{
            
            cursor: pointer;
            background-color: lightgray;
            text-decoration: none
        }
        li a:hover{
          
            background-color: gray;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="/">Home Page</a></li>
        <li><a href="/usershow">All Products for User</a></li>
        <li><a href="/show">All Products for Admin</a></li>
        @if(Session::has('LoginUser'))
            <li>
                <a>Welcome {{Session::get('LoginUser')}}</a>
            </li>
        @else
            <li><a href="/login">Login</a></li>
        @endif
        
        <li><a href="/register">Register Page</a></li>
        <li><a href="/logout">LogOut</a></li>
    </ul>
</body>
</html>