<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" class="form-control" name="qty" placeholder="Qty" value="{{$product->qty}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price" value="{{$product->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description" value="{{$product->description}}" />
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Update" />
        </div>
    </form>
</body>
</html>