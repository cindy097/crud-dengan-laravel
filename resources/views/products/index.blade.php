<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}">Create New Product</a>
    @if(session('succes'))
    <p>{{ session('succes') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Update</a>
                </td>
                <td>
                <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE') <!-- Spoofing DELETE request -->
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>