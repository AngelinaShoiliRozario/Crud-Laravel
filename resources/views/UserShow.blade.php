@include('Navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Show Page</title>
</head>
<body>
    <h1>View all products information here</h1>
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>Product Name</th>
                <th>Product Details</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach($allProducts as $product)
                <tr>
                    <th>{{$product->id}}</th>
                    <th>{{$product->name}}</th>
                    <th>{{$product->detail}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    this is show page
</body>
</html>