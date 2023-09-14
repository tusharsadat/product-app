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
            <div class="col-3">
                <a href="{{route('products.create')}}" class="btn btn-info">Add Product</a>
            </div>
            
            @if(Session::get('success'))
		<div class="alert alert-success">
			{{Session::get('success')}}
		</div>
	@endif

	@if(Session::get('fail'))
		<div class="alert alert-danger">
			{{Session::get('fail')}}
		</div>
	@endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Product Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('products.show', $product->id)}}" class="btn btn-info">Show</a></td>
                <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger" style="display: inline;">Delete</button>
                      </form>
                </td>

            </tr>
            @endforeach
        </tbody>
        
    </table>
    <div class="row">
        <div class="col-8">
            {{ $products->links() }}
        </div>
        <div class="col-4">
            <a href="{{url('product/export')}}" class="btn btn-success">Download Product</a>
            <a href="{{url('product/upload')}}" class="btn btn-success">Import Product</a>
        </div>
      </div>
    
        </div>
        
    </div>
    
    
</body>
</html>