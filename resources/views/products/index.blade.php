<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Product Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3 class="text-center py-2">Show All Product</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Product Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
        </div>
        <div class="row">
            <a href="{{url('products/export')}}" class="btn btn-success">Export Excle</a>
        </div>
        
    </div>
    
    
</body>
</html>