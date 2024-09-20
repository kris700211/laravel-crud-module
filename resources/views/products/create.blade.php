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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <div>
        <form method="post" action="{{route('product.store')}}">
            @csrf 
            @method('post')
            <div class="col-auto">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" />
            </div>
            <div class="col-auto">
                <label>Qty</label>
                <input type="text" class="form-control" name="qty" placeholder="Qty" />
            </div>
            <div class="col-auto">
                <label>Price</label>
                <input type="text" class="form-control" name="price" placeholder="Price" />
            </div>
            <div class="col-auto">
                <label>Description</label>
                <input type="text" class="form-control" name="description" placeholder="Description" />
            </div>
            <div>
                <input type="submit" value="Create" class="btn btn-primary" />
            </div>
        </form>
    </div>
</body>
</html>