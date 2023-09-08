<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Create Product</h2>
  <form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" placeholder="Enter Product Name" name="name">
    </div>
    <div class="form-group">
      <label for="category">Product Category:</label>
      <input type="text" class="form-control" placeholder="Enter Product Category" name="category">
    </div>
    <div class="form-group">
        <label for="price">Product Price:</label>
        <input type="text" class="form-control" placeholder="Enter Product Price" name="price">
      </div>
      <div class="form-group">
        <label for="description">Product Details:</label>
        <input type="text" class="form-control" placeholder="Enter Product Details" name="description">
      </div>
 
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
