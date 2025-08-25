
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Product </h1>
    <div>
        @if(session()-> has('success'))

        <div>
            {{session('success')}}

        </div>

        @endif
    </div>
    <div>
        <a href="product/create">Create Product</a>
    </div>
    <div>
        <table border = "1">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>QTY</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>EDIT</th>
                <th>DELETE</th>

            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit' , ['product' => $product])}}"> Edit</a>
                </td>
                <TD>
                    <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value = "Delete">
                    </form>
                </TD>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>